// Close the dropdown if the user clicks outside of it
let currentTerm = 0;
let currentUnits = "$";
let currentPage = "#mk-calc";
let countDownTimer;

const terms = [
    {
        resMessage: "30-year fixed",
        message: "Fixed 30 Years",
        term: 360
    },
    {
        resMessage: "20-year fixed",
        message: "Fixed 20 Years",
        term: 240
    },
    {
        resMessage: "15-year fixed",
        message: "Fixed 15 Years",
        term: 180
    }
]

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function pad(num, size) {
    num = num.toString();
    while (num.length < size) num = "0" + num;
    return num;
}

function startCountDown() {
    if (countDownTimer)
        return;

    let countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 2);
    countDownDate = countDownDate.getTime();

    // Update the count down every 1 second
    countDownTimer = setInterval(function() {
        // Get today's date and time
        const now = new Date().getTime();

        // Find the distance between now and the count down date
        const distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("cell-days").innerHTML = pad(days, 2);
        document.getElementById("cell-hrs").innerHTML = pad(hours, 2);
        document.getElementById("cell-mins").innerHTML = pad(minutes, 2);
        document.getElementById("cell-secs").innerHTML = pad(seconds, 2);

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
}


async function fetchWithTimeout(resource, onTimeout, options = {}) {
    const { timeout = 8000 } = options;

    const controller = new AbortController();
    const id = setTimeout(() => {
        controller.abort();
        onTimeout && onTimeout();
    }, timeout);
    const response = await fetch(resource, {
        ...options,
        signal: controller.signal
    });
    clearTimeout(id);
    return response;
}


function checkMortgageApi() {
    const href = "https://calculator.arcadia.volterra.demomix.online/mortgage/api/index.php";
    fetchWithTimeout(href, () => {
            $("#mk-waiting").addClass("mk-hidden");
            $("#mk-coming-soon").removeClass("mk-hidden");
            $(currentPage).addClass("mk-hidden");
            startCountDown();
        },
        {timeout: 5000}).then(res => {
            $("#mk-waiting").addClass("mk-hidden");

            if (res.status === 200) {
                clearInterval(countDownTimer);
                countDownTimer = undefined;
                $("#mk-coming-soon").addClass("mk-hidden");
                $(currentPage).removeClass("mk-hidden");
            }
            else {
                $("#mk-coming-soon").removeClass("mk-hidden");
                $("#mk-calc").addClass("mk-hidden");
                $("#mk-res").addClass("mk-hidden");
                startCountDown();
            }
        })
}

function showOptions(e) {
    document.getElementById("mk-options").classList.toggle("show");
    e.stopImmediatePropagation();
}

function selectUnits(e, units) {
    currentUnits = units;
    switch (units) {
        case "%": {
            $("#units-usd").removeClass("mk-selected-units");
            $("#units-percent").addClass("mk-selected-units");
            break;
        }
        case "$": {
            $("#units-usd").addClass("mk-selected-units");
            $("#units-percent").removeClass("mk-selected-units");
            break;
        }
    }
}

function selectItem(item) {
    currentTerm = item;
    $("#selected-item").html(terms[item].message);
}

function fetchPayment() {
    currentPage = "#mk-res";

    $('#mk-res').addClass("mk-hidden");
    $('#mk-calc').addClass("mk-hidden");
    $('#mk-waiting').removeClass("mk-hidden");

    const price = parseFloat($('#mk-input-price').val());
    const down = parseFloat($('#mk-input-down').val());
    const term = terms[currentTerm].term;
    const zip = parseFloat($('#mk-input-zip').val());

    let downValue = down;
    if (currentUnits.trim() === "%") {
        downValue = parseFloat(down) / 100 * price;
    }

    const href = `https://calculator.arcadia.volterra.demomix.online/mortgage/api/calculate.php?price=${price}&down=${downValue}&term=${term}&zip=${zip}`
    fetch(href).then(res => {
        $('#mk-waiting').addClass("mk-hidden");
        $('#mk-res').removeClass("mk-hidden");

        if (res.status === 200) {
            res.json().then(obj => {
                const loan = ((Math.ceil(obj.loan * 100)/100))
                    .toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                const interest = ((Math.ceil(obj.monthlyPrincipal * 100)/100))
                    .toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                const taxes = ((Math.ceil(obj.propertyTaxes * 100)/100))
                    .toLocaleString('en-US', { style: 'currency', currency: 'USD' })
                const homeownersInsurance = ((Math.ceil(obj.homeownersInsurance * 100)/100))
                    .toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                const monthlyTotal = ((Math.ceil(obj.monthlyTotal * 100)/100))
                    .toLocaleString('en-US', { style: 'currency', currency: 'USD' });

                $("#res-plan-duration").text(terms[currentTerm].resMessage);
                $("#res-loan-size").text(loan);
                $("#res-monthly-payment").text(monthlyTotal);
                $("#res-monthly-and-interest").text(interest);
                $("#res-property-taxes").text(taxes);
                $("#res-insurance").text(homeownersInsurance);
                $("#res-table-total").text(monthlyTotal);
            })
        }
    })
}

function recalculate(e) {
    currentPage = "#mk-calc";
    $('#mk-res').addClass("mk-hidden");
    $('#mk-calc').removeClass("mk-hidden");
    e.stopImmediatePropagation();
}

checkMortgageApi();
setInterval(() => {
    checkMortgageApi();
}, 3000);