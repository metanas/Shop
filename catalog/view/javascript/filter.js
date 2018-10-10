$(document).ready(function () {
    /* Close/hide the sidenav */
    $('body').on('click', '.closebtn', function () {
        document.getElementById("slidebar").style.width = "0";
    });


    $('body').on('click', '.model-filter', function (e) {
            e.stopPropagation();
            if ($(".dropdown-filter", this.parentNode).css('display') === 'block') {
                $(".dropdown-filter", this.parentNode).hide(200);
                $(this.parentNode).css({"border": "1px solid #e7e7e7"});
                $(this.parentNode).css({"position": "relative"});
            } else {
                $('.dropdown-filter').hide(100);
                $('.dropdownFilter').css({"border": "1px solid #e7e7e7"});
                $(".dropdown-filter", this.parentNode).show(200);
                $(this.parentNode).css({"border": "2px solid black"});
                $(this.parentNode).css({"position": "absolute"});
            }
        }
    );

    $("body").on('click', 'input:checkbox', function (event) {
        var param = '';
        const filt = getURLVar('filt');
        const newFilt = event.target.name + event.target.value;
        if (event.target.checked) {
            if (filt !== '') {
                param = filt + "_" + newFilt;
            } else {
                param = newFilt;
            }
        } else {
            param = filt.replace(newFilt, '');
        }
        updateQueryStringParam('filt', param);
        event.stopPropagation();
    });

    $("body").on("change", '#ex12c', function (e) {
        $("#max-price").html(e.value['newValue'][1] + " {{ currency }}");
        $("#min-price").html(e.value['newValue'][0] + " {{ currency }}");
        filters.splice(filters.indexOf(price[0]), 1);
        filters.splice(filters.indexOf(price[1]), 1);
        price[0] = "prixMax[]" + e.value['newValue'][1];
        price[1] = "prixMin[]" + e.value['newValue'][0];
    });

    $("body").on("click", '.filter-done', function (e) {
        filterGenerator();
    });

    $(document).on('click', '', function (e) {
        $.map($(".dropdown-filter").get(), function (item) {
            if (item.style.display === "block" && $.inArray(e.target.tagName, ['INPUT', 'SPAN', 'LABEL', 'BUTTON']) === -1) {
                filterGenerator();
            }
        });
    });

    setFilter();
});


function removeFilter(e) {
    const tar = e.innerText.replace(':', '[]');
    var param = decodeURI(getURLVar('filt')).replace(tar, '');
    param = param.replace("__", '_');
    param = param.replace(/_$/, '');
    param = param.replace(/^_/, '');
    updateQueryStringParam('filt', param);
    filterGenerator();
}

$(document).on('click', '', function (e) {
    $.map($(".dropdown-filter").get(), function (item) {
        if (item.style.display === "block" && $.inArray(e.target.tagName, ['INPUT', 'SPAN', 'LABEL', 'BUTTON']) === -1) {
            filterGenerator();
        }
    });
});

function filterGenerator() {
    var url = "index.php?route=product/category/filter&path=" + String(getURLVar("path"));
    if (String(getURLVar("filt")) !== '') {
        url += "&filt=" + String(getURLVar("filt"));
    }
    $.ajax({
        url: url,
        type: "GET",
        beforeSend: function () {
            $('body').loading({message: "chargement.."});
        },
        complete: function () {
            $('body').loading('stop');
        },
        success: function (json) {
            console.log($('footer').prev().remove());
            $('header').after(json);
            setFilter();
        },
        error: function (result, status, s) {
            $('body').loading('stop');
        },
    });
}

function setFilter() {
    $(".filter-content").empty();
    const s = decodeURI(String(getURLVar("filt")));
    if (s !== '') {
        var filters = s.split('_');
        for (i = 0; i < filters.length; i++) {
            $(".filter-content").append('<div class="filter-generate" onclick="removeFilter(this)" style="display: inline;margin-bottom: 15px">' + (filters[i].replace('[]', ":")) + '<i class="fa fa-close" style="margin-left: 5px"></i></div>');
        }

        if (filters.length >= 3 && $('.clear-all-filters').get().length === 0) {
            $(".filter-content").prepend('<span class="filter-generate clear-all-filters" onclick="removeAllFilters()">Retirer tous les filtres<i class="fa fa-close" style="margin-left: 5px"></i></span>');
        }

        $('.dropdown-filter').hide(200);
        $('.dropdownFilter').css({"border": "1px solid #e7e7e7"});
        $('.dropdownFilter').css({"position": "relative"});
    }
}

function removeAllFilters() {
    updateQueryStringParam('filt', '');
    filterGenerator()
}

function updateQueryStringParam(param, value) {
    baseUrl = [location.protocol, '//', location.host, location.pathname].join('');
    urlQueryString = document.location.search;
    let newParam = param + '=' + value;
    let params = '?' + newParam;
    // If the "search" string exists, then build params from it
    if (urlQueryString && value !== '') {
        keyRegex = new RegExp('([\?&])' + param + '[^&]*');
        // If param exists already, update it
        if (urlQueryString.match(keyRegex) !== null) {
            params = urlQueryString.replace(keyRegex, "$1" + newParam);
        } else { // Otherwise, add it to end of query string
            params = urlQueryString + '&' + newParam;
        }
    } else {
        params = urlQueryString.replace("&" + param + "=" + getURLVar(param), "");
    }

    window.history.replaceState({}, "", baseUrl + params);
}

function openSlide () {
    console.log('open')
    console.log($("#slidebar"));
    $("#slidebar").css({"width" : "100%"});
}
