    /* Auto fill donation amount */
    let donationAmount = document.querySelectorAll('.donation-amount-default');
    let donationAmountArr = [...donationAmount];
    donationAmountArr.forEach(amount => {
        amount.addEventListener("click", function () {
            const boxes = Array.from(document.getElementsByClassName('donation-amount-default'));
            boxes.forEach(box => {
                // ✅ Remove class from each element
                box.classList.remove('active');
                // ✅ Add class to each element
                // box.classList.add('small');
            });
            amount.classList.add('active');
            var doantionAmnt = document.getElementsByClassName('donationAmount');
            console.log(doantionAmnt);
            for (var i = 0; i < doantionAmnt.length; i++) {
                doantionAmnt[i].value = amount.getAttribute('data-amount');
            }
            //document.getElementById('donationAmount').value = amount.getAttribute('data-amount');
        });
    });

    /* Scroll Guidelines*/
    $(".contribute-guidelines-text #guidelinesCont").click(function () {
        $('html, body').animate({
            scrollTop: $("#contributionGuidelines").offset().top - 100
        }, 1000);
    });
    $(".contribute-guidelines-text #offlineCont").click(function () {
        $('html, body').animate({
            scrollTop: $("#bankTransfer").offset().top - 100
        }, 1000);
    });

    /* on donation form submit*/
    $(".donate-form").submit(function (e) {
        e.preventDefault();
        var amount = $("#donationAmount").val();
        var checkAmount = (Number(amount) > 0 && Number(amount) >= 10);
        var nationality = "Indian";
        var checkNationality = (nationality != "");
        let location = window.location.pathname;

        /* check amount and nationality selected*/
        if (checkAmount && checkNationality) {
            $("#amountContribute").attr("value", amount);
            document.getElementById('doner_nationality').value = nationality;
            if (nationality == "Indian") {
                /*$("#doner_nationality option[value=Indian]").attr('selected', 'selected');*/
            }
            //openContributionModal(1, "Overall Goals");
            $('#contributeModal').modal('show');
        }
    });

(jQuery);
