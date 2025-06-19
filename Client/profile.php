<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="admin dashboard/css/theme.css" rel="stylesheet" media="all">
    <link href="admin dashboard/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../assets/css/profile.css" rel="stylesheet">]

    <!-- Bootstrap CSS-->
    <link href="admin dashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="admin dashboard/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="admin dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"
        media="all">
    <link href="admin dashboard/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="admin dashboard/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="admin dashboard/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="admin dashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="admin dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
</head>

<body>
    <section class="py-5 my-5">
        <div class="container">

            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav border-right">

                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab"
                            aria-controls="account" aria-selected="true">
                            <i class="fa fa-user text-center mr-1"></i>
                            Account
                        </a>
                        <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab"
                            aria-controls="password" aria-selected="false">
                            <i class="fa fa-lock text-center mr-1"></i>
                            Password
                        </a>

                        <a class="nav-link" id="managetrips-tab" data-toggle="pill" href="#Managetrips" role="tab"
                            aria-controls="Managetrips" aria-selected="false">
                            <i class="fa fa-ticket-alt text-center mr-1"></i>
                            Manage trips
                        </a>

                        <a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab"
                            aria-controls="security" aria-selected="false">
                            <i class="fa fa-credit-card text-center mr-1"></i>
                            Wallet
                        </a>


                    </div>
                </div>
                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <h3 class="mb-4">Account Settings</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" value="Kiran">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" value="Acharya">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="kiranacharya287@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" class="form-control" value="+91 9876543215">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" class="form-control" value="Kiran Workspace">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" value="UI Developer">
                                </div>
                            </div>

                        </div>
                        <div>
                            <button class="btn btn-primary">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <h3 class="mb-4">Password Settings</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                        <h3 class="mb-4">Wallet</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Card Name </label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>CVV</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Expiry Date</label>
                                    <input type="text" id="inputExpDate" placeholder="MM / YY" maxlength='7'>
                                </div>

                            </div>

                        </div>
                        <div>
                            <button class="btn btn-primary">Add</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Managetrips" role="tabpanel" aria-labelledby="managetrips-tab">
                        <h3 class="mb-4">Manage trips</h3>
                        <div class="row">
                            <div class="table-container">
                                <!-- DATA TABLE -->


                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>

                                                <th>No</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>departure date</th>
                                                <th>arrival date</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">

                                                <td>913</td>
                                                <td>Cairo</td>
                                                <td>Alexandria</td>
                                                <td>2018-09-27 02:00</td>
                                                <td>2018-09-27 05:00</td>




                                                <td>
                                                    <div class="table-data-feature">

                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="tr-shadow">

                                                <td>913</td>
                                                <td>Cairo</td>
                                                <td>Alexandria</td>
                                                <td>2018-09-27 02:00</td>
                                                <td>2018-09-27 05:00</td>



                                                <td>
                                                    <div class="table-data-feature">

                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="tr-shadow">

                                                <td>913</td>
                                                <td>Cairo</td>
                                                <td>Alexandria</td>
                                                <td>2018-09-27 02:00</td>
                                                <td>2018-09-27 05:00</td>



                                                <td>
                                                    <div class="table-data-feature">

                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>




                        </div>
                    </div>
                </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Jquery JS-->
    <script src="admin dashboard/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="admin dashboard/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="admin dashboard/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="admin dashboard/vendor/slick/slick.min.js">
    </script>
    <script src="admin dashboard/vendor/wow/wow.min.js"></script>
    <script src="admin dashboard/vendor/animsition/animsition.min.js"></script>
    <script src="admin dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="admin dashboard/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="admin dashboard/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="admin dashboard/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="admin dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin dashboard/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="admin dashboard/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="admin dashboard/js/main.js"></script>

    <script>
        var app;

        (function () {
            'use strict';

            app = {
                monthAndSlashRegex: /^\d\d \/ $/, // regex to match "MM / "
                monthRegex: /^\d\d$/, // regex to match "MM"

                el_cardNumber: '.ccFormatMonitor',
                el_expDate: '#inputExpDate',
                el_cvv: '.cvv',
                el_ccUnknown: 'cc_type_unknown',
                el_ccTypePrefix: 'cc_type_',
                el_monthSelect: '#monthSelect',
                el_yearSelect: '#yearSelect',

                cardTypes: {
                    'American Express': {
                        name: 'American Express',
                        code: 'ax',
                        security: 4,
                        pattern: /^3[47]/,
                        valid_length: [15],
                        formats: {
                            length: 15,
                            format: 'xxxx xxxxxxx xxxx'
                        }
                    },
                    'Visa': {
                        name: 'Visa',
                        code: 'vs',
                        security: 3,
                        pattern: /^4/,
                        valid_length: [16],
                        formats: {
                            length: 16,
                            format: 'xxxx xxxx xxxx xxxx'
                        }
                    },
                    'Maestro': {
                        name: 'Maestro',
                        code: 'ma',
                        security: 3,
                        pattern: /^(50(18|20|38)|5612|5893|63(04|90)|67(59|6[1-3])|0604)/,
                        valid_length: [16],
                        formats: {
                            length: 16,
                            format: 'xxxx xxxx xxxx xxxx'
                        }
                    },
                    'Mastercard': {
                        name: 'Mastercard',
                        code: 'mc',
                        security: 3,
                        pattern: /^5[1-5]/,
                        valid_length: [16],
                        formats: {
                            length: 16,
                            format: 'xxxx xxxx xxxx xxxx'
                        }
                    }
                }
            };

            app.addListeners = function () {
                $(app.el_expDate).on('keydown', function (e) {
                    app.removeSlash(e);
                });

                $(app.el_expDate).on('keyup', function (e) {
                    app.addSlash(e);
                });

                $(app.el_expDate).on('blur', function (e) {
                    app.populateDate(e);
                });

                $(app.el_cvv + ', ' + app.el_expDate).on('keypress', function (e) {
                    return e.charCode >= 48 && e.charCode <= 57;
                });
            };

            app.addSlash = function (e) {
                var isMonthEntered = app.monthRegex.exec(e.target.value);
                if (e.key >= 0 && e.key <= 9 && isMonthEntered) {
                    e.target.value = e.target.value + " / ";
                }
            };

            app.removeSlash = function (e) {
                var isMonthAndSlashEntered = app.monthAndSlashRegex.exec(e.target.value);
                if (isMonthAndSlashEntered && e.key === 'Backspace') {
                    e.target.value = e.target.value.slice(0, -3);
                }
            };

            app.populateDate = function (e) {
                var month, year;

                if (e.target.value.length == 7) {
                    month = parseInt(e.target.value.slice(0, -5));
                    year = "20" + e.target.value.slice(5);

                    if (app.checkMonth(month)) {
                        $(app.el_monthSelect).val(month);
                    } else {
                        $(app.el_monthSelect).val(0);
                    }

                    if (app.checkYear(year)) {
                        $(app.el_yearSelect).val(year);
                    } else {
                        $(app.el_yearSelect).val(0);
                    }

                }
            };

            app.checkMonth = function (month) {
                if (month <= 12) {
                    var monthSelectOptions = app.getSelectOptions($(app.el_monthSelect));
                    month = month.toString();
                    if (monthSelectOptions.includes(month)) {
                        return true;
                    }
                }
            };

            app.checkYear = function (year) {
                var yearSelectOptions = app.getSelectOptions($(app.el_yearSelect));
                if (yearSelectOptions.includes(year)) {
                    return true;
                }
            };

            app.getSelectOptions = function (select) {
                var options = select.find('option');
                var optionValues = [];
                for (var i = 0; i < options.length; i++) {
                    optionValues[i] = options[i].value;
                }
                return optionValues;
            };

            app.setMaxLength = function ($elem, length) {
                if ($elem.length && app.isInteger(length)) {
                    $elem.attr('maxlength', length);
                } else if ($elem.length) {
                    $elem.attr('maxlength', '');
                }
            };

            app.isInteger = function (x) {
                return (typeof x === 'number') && (x % 1 === 0);
            };

            app.createExpDateField = function () {
                $(app.el_monthSelect + ', ' + app.el_yearSelect).hide();
                $(app.el_monthSelect).parent().prepend('<input type="text" class="ccFormatMonitor">');
            };


            app.isValidLength = function (cc_num, card_type) {
                for (var i in card_type.valid_length) {
                    if (cc_num.length <= card_type.valid_length[i]) {
                        return true;
                    }
                }
                return false;
            };

            app.getCardType = function (cc_num) {
                for (var i in app.cardTypes) {
                    var card_type = app.cardTypes[i];
                    if (cc_num.match(card_type.pattern) && app.isValidLength(cc_num, card_type)) {
                        return card_type;
                    }
                }
            };

            app.getCardFormatString = function (cc_num, card_type) {
                for (var i in card_type.formats) {
                    var format = card_type.formats[i];
                    if (cc_num.length <= format.length) {
                        return format;
                    }
                }
            };

            app.formatCardNumber = function (cc_num, card_type) {
                var numAppendedChars = 0;
                var formattedNumber = '';
                var cardFormatIndex = '';

                if (!card_type) {
                    return cc_num;
                }

                var cardFormatString = app.getCardFormatString(cc_num, card_type);
                for (var i = 0; i < cc_num.length; i++) {
                    cardFormatIndex = i + numAppendedChars;
                    if (!cardFormatString || cardFormatIndex >= cardFormatString.length) {
                        return cc_num;
                    }

                    if (cardFormatString.charAt(cardFormatIndex) !== 'x') {
                        numAppendedChars++;
                        formattedNumber += cardFormatString.charAt(cardFormatIndex) + cc_num.charAt(i);
                    } else {
                        formattedNumber += cc_num.charAt(i);
                    }
                }

                return formattedNumber;
            };

            app.monitorCcFormat = function ($elem) {
                var cc_num = $elem.val().replace(/\D/g, '');
                var card_type = app.getCardType(cc_num);
                $elem.val(app.formatCardNumber(cc_num, card_type));
                app.addCardClassIdentifier($elem, card_type);
            };

            app.addCardClassIdentifier = function ($elem, card_type) {
                var classIdentifier = app.el_ccUnknown;
                if (card_type) {
                    classIdentifier = app.el_ccTypePrefix + card_type.code;
                    app.setMaxLength($(app.el_cvv), card_type.security);
                } else {
                    app.setMaxLength($(app.el_cvv));
                }

                if (!$elem.hasClass(classIdentifier)) {
                    var classes = '';
                    for (var i in app.cardTypes) {
                        classes += app.el_ccTypePrefix + app.cardTypes[i].code + ' ';
                    }
                    $elem.removeClass(classes + app.el_ccUnknown);
                    $elem.addClass(classIdentifier);
                }
            };


            app.init = function () {

                $(document).find(app.el_cardNumber).each(function () {
                    var $elem = $(this);
                    if ($elem.is('input')) {
                        $elem.on('input', function () {
                            app.monitorCcFormat($elem);
                        });
                    }
                });

                app.addListeners();

            }();

        })();
    </script>
</body>

</html>