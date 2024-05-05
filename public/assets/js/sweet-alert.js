$(function(e) {
    "use strict";

    // Message
    $(document).on("click", "#but1", function(e) {
        $('body').removeClass('timer-alert');
        var message = $("#message").val();
        if (message == "") {
            message = "Your message";
        }
        swal(message);
    });
    // With message and title
    $(document).on("click", "#but2", function(e) {
        $('body').removeClass('timer-alert');
        var message = $("#message").val();
        var title = $("#title").val();
        if (message == "") {
            message = "Your message";
        }
        if (title == "") {
            title = "Your message";
        }
        swal(title, message);
    });
    // Show image
    $(document).on("click", "#but3", function(e) {
        $('body').removeClass('timer-alert');
        var message = $("#message").val();
        var title = $("#title").val();
        if (message == "") {
            message = "Your message";
        }
        if (title == "") {
            title = "Your message";
        }
        swal({
            title: title,
            text: message,
            imageUrl: '../assets/images/brand/logo-2.png'
        });
    });
    // Timer
    $(document).on("click", "#but4", function(e) {
        $('body').addClass('timer-alert');
        var message = $("#message").val();
        var title = $("#title").val();
        if (message == "") {
            message = "Your message";
        }
        if (title == "") {
            title = "Your message";
        }
        message += "(close after 2 seconds)";
        swal({
            url: '/login',
            title: title,
            text: message,
            timer: 2000,
            showConfirmButton: false
        });
    });
    //
    $(document).on("click", "#click", function(e) {
        $('body').removeClass('timer-alert');
        var type = $("#type").val();
        swal({
            title: "Title",
            text: "Your message",
            type: type
        });
    });
    // Prompt
    $(document).on("click", "#prompt", function(e) {
        $('body').removeClass('timer-alert');
        swal({
            title: "Add",
            text: "Enter your message",
            type: "input",
            showCancelButton: true,
            closeOnConfirm: false,
            inputPlaceholder: "Your message"
        }, function(inputValue) {
            if (inputValue != "") {
                swal("Input", "You have entered : " + inputValue);
            }
        });
    });
    // Confirm
    $(document).on("click", "#confirm", function(e) {
        $('body').removeClass('timer-alert');
        swal({
            title: "Alert",
            text: "Are you really want to exit",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'Exit',
            cancelButtonText: 'Stay on the page'
        });
    });
    $(document).on("click", "#click", function(e) {
        swal('Congratulations!', 'Your message has been succesfully sent', 'success');
    });
    //payment alert
    $(document).on("click", "#click-payment", function(e) {
        swal('Congratulations!', 'Your Order is Placed', 'success');
    });
    $(document).on("click", "#click1", function(e) {
        $('body').removeClass('timer-alert');
        swal({
            title: "Alert",
            text: "Waring alert",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'Exit',
            cancelButtonText: 'Stay on the page'
        });
    });
    $(document).on("click", "#click2", function(e) {
        $('body').removeClass('timer-alert');
        swal({
            title: "Alert",
            text: "Danger alert",
            type: "error",
            showCancelButton: true,
            confirmButtonText: 'Exit',
            cancelButtonText: 'Stay on the page'
        });
    });
    $(document).on("click", "#click3", function(e) {
        $('body').removeClass('timer-alert');
        swal({
            title: "Alert",
            text: "Info alert",
            type: "info",
            showCancelButton: true,
            confirmButtonText: 'Exit',
            cancelButtonText: 'Stay on the page'
        });
    });
    $(document).on("click", "#login-page", function(e) {
        $('body').removeClass('timer-alert');
        swal({
          title: "Alert",
          text: "Are you sure want to logout?",
          type: "info",
          showCancelButton: true,
          confirmButtonText: 'Exit',
          cancelButtonText: 'Stay on the page'
        }, function(result) {
          if (result) {
            window.location.href = 'login';
          } else {
            // User clicked "Stay on the page" or closed the dialog, perform necessary actions or do nothing
          }
        });
      });

        $(document).on("click", "#submitPemasukan", function(e) {
          e.preventDefault();

          $('body').removeClass('timer-alert');

          var dateValue         = document.getElementById('date').value;
          var ketValue          = document.getElementById('ket').value;
          var pemasukanValue    = document.getElementById('pemasukan').value;

          if(dateValue === '' || ketValue === '' || pemasukanValue === ''){
              swal("Error", "Please fill all the required fields", "error");
            } else {
                swal({
                    title: "You want to submit the data?",
                    text: "Make sure the data is correct",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonText: 'Submit',
                    cancelButtonText: 'Stay on page',
                  }, function(result){
                  if(result) {
                      document.forms[0].submit();
                    }
                });
            }
        });

        $(document).on("click", "#submitPengeluaran", function(e) {
            e.preventDefault();

            $('body').removeClass('timer-alert');

            var datePengeluaran         = document.getElementById('datePengeluaran').value;
            var itemValue               = document.getElementById('itemValue').value;
            var ketPengeluaran          = document.getElementById('ketPengeluaran').value;
            var PengeluaranValue        = document.getElementById('PengeluaranValue').value;
            var strukValue              = document.getElementById('strukValue').value;
            var picValue                = document.getElementById('picValue').value;

            if(datePengeluaran === '' || itemValue === '' || ketPengeluaran === '' || PengeluaranValue === '' || strukValue === '' || picValue === ''){
                swal("Error", "Please fill all the required fields", "error");
                } else {
                  swal({
                      title: "You want to submit the data?",
                      text: "Make sure the data is correct",
                      type: 'info',
                      showCancelButton: true,
                    }, function(result){
                        if(result){
                            document.forms[0].submit();
                        }
                    });
                }
        });

        $(document).on("click", "#submitInventory", function(e) {
            e.preventDefault();

            $('body').removeClass('timer-alert');

            var itemInventory = document.getElementById('itemInventory').value;
            var qtyValue = document.getElementById('qtyValue').value;
            var stokValue = document.getElementById('stokValue').value;

            if(itemInventory === '' || qtyValue === '' || stokValue === ''){
                swal("Error", "Please fill all the required fields", "error");
            } else {
                swal({
                    title: "Do you want to submit the data?",
                    text: "Make sure the data is correct",
                    type: 'info',
                    showCancelButton: true,
                    cancelButtonText: "Stay on page",
                    confirmButtonText: "Submit"
                }, function(result){
                    if(result){
                        document.forms[0].submit();
                    }
                });
            }
        });

        $(document).on("click", "#submitEditPemasukan", function(e) {
            e.preventDefault();

            $('body').removeClass('timer-alert');

            var dateEditPemasukan = document.getElementById('dateEditPemasukan').value;
            var ketEditPemasukan = document.getElementById('ketEditPemasukan').value;
            var editPemasukan = document.getElementById('editPemasukan').value;

            if(dateEditPemasukan === '' || ketEditPemasukan === '' || editPemasukan === ''){
                swal("Error", "Please fill all the required fields", 'error');
            } else {
                swal({
                    title: "Are the data already correct",
                    text: "Make sure all the inputted data are correct",
                    type: 'info',
                    showCancelButton: true,
                    cancelButtonText: "Stay on page",
                    confirmButtonText: "Submit"
                }, function(result){
                    if(result){
                        document.forms[0].submit();
                    }
                });
            }
        });

        // PEMASUKAN
        $(document).ready(function (){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.servideletebtn').click(function (e) {
                e.preventDefault();

                var del_id = $(this).closest("tr").find('.clsdelete_id').val();
                // alert(del_id);

                swal({
                    title: "Are you want to delete this data?",
                    text: "You can't recover this data once it's deleted",
                    type: 'warning',
                    confirmButtonText: "DELETE",
                    confirmButtonColor: '#ff0000',
                    showCancelButton: true,
                    cancelButtonText: "CANCEL",
                },function(willDelete){
                    if(willDelete){
                        var data = {
                            "_token": $('input[name=_token]').val(),
                            'id': del_id,
                        }
                        $.ajax({
                            type: "DELETE",
                            url: '/pemasukan/' + del_id,
                            data: data,
                            success: function (response) {
                                swal({
                                    title: "Success",
                                    text: "The data has been deleted succesfully",
                                    type: 'success',
                                    confirmButtonText: "OK"
                                }, function(result){
                                    location.reload();
                                });
                             }
                        });
                    }
                });
            });
        });

        // PENGELUARAN
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.pengeluaranDelete').click(function (e) {
                e.preventDefault();

                var del_pengeluaran = $(this).closest("tr").find('.pengeluaran_id').val();
                // alert(del_pengeluaran);

                swal({
                    title: "Are You sure want to delete this data?",
                    text: "You can't recover this data once deleted",
                    type: 'warning',
                    confirmButtonText: "DELETE",
                    showCancelButton: true,
                    cancelButtonText: "CANCEL",
                }, function(willDelete){
                    if(willDelete){
                        var data_pengeluaran = {
                            "_token": $('input[name=_token]').val(),
                            'id': del_pengeluaran,
                        }
                        $.ajax({
                            type: "DELETE",
                            url: '/pengeluaran/' + del_pengeluaran,
                            data: data_pengeluaran,
                            success: function (response) {
                                swal({
                                    title: "Success",
                                    text: "Succesfully deleted the data",
                                    type: 'success',
                                    confirmButtonText: "OK",
                                }, function(result){
                                    location.href = location.href;
                                    console.log("Berhasil");
                                });
                            }
                        });
                    }
                })
            });
        })


    });
