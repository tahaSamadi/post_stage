/*
Template Name: Qovex - Responsive Bootstrap 4 Admin Dashboard
Author: Themesbrand
Version: 1.0.0
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Main Js File
*/


(function ($) {

    'use strict';

    function initMetisMenu() {
        //metis menu
        $("#side-menu").metisMenu();
    }

    function initLeftMenuCollapse() {
        $('#vertical-menu-btn').on('click', function (event) {
            event.preventDefault();
            $('body').toggleClass('sidebar-enable');
            if ($(window).width() >= 992) {
                $('body').toggleClass('vertical-collpsed');
            } else {
                $('body').removeClass('vertical-collpsed');
            }
        });
    }

    function initActiveMenu() {
        // === following js will activate the menu in left side bar based on url ====
        $("#sidebar-menu a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("mm-active"); // add active to li of the current link
                $(this).parent().parent().addClass("mm-show");
                $(this).parent().parent().prev().addClass("mm-active"); // add active class to an anchor
                $(this).parent().parent().parent().addClass("mm-active");
                $(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link
                $(this).parent().parent().parent().parent().parent().addClass("mm-active");
            }
        });
    }

    function initMenuItem() {
        $(".navbar-nav a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active");
                $(this).parent().parent().addClass("active");
                $(this).parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().parent().addClass("active");
            }
        });
    }

    function initFullScreen() {
        $('[data-toggle="fullscreen"]').on("click", function (e) {
            e.preventDefault();
            $('body').toggleClass('fullscreen-enable');
            if (!document.fullscreenElement && /* alternative standard method */ !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }
        });
        document.addEventListener('fullscreenchange', exitHandler);
        document.addEventListener("webkitfullscreenchange", exitHandler);
        document.addEventListener("mozfullscreenchange", exitHandler);

        function exitHandler() {
            if (!document.webkitIsFullScreen && !document.mozFullScreen && !document.msFullscreenElement) {
                console.log('pressed');
                $('body').removeClass('fullscreen-enable');
            }
        }
    }

    function initRightSidebar() {
        // right side-bar toggle
        $('.right-bar-toggle').on('click', function (e) {
            $('body').toggleClass('right-bar-enabled');
        });

        $(document).on('click', 'body', function (e) {
            if ($(e.target).closest('.right-bar-toggle, .right-bar').length > 0) {
                return;
            }

            $('body').removeClass('right-bar-enabled');
            return;
        });
    }

    function initDropdownMenu() {
        $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');

            return false;
        });
    }

    function initComponents() {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    }

    function initPreloader() {
        $(window).on('load', function () {
            $('#status').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
        });
    }

    function initSettings() {
        if (window.sessionStorage) {
            var alreadyVisited = sessionStorage.getItem("is_visited");
            if (!alreadyVisited) {
                sessionStorage.setItem("is_visited", "light-mode-switch");
            } else {
                $(".right-bar input:checkbox").prop('checked', false);
                $("#" + alreadyVisited).prop('checked', true);
                updateThemeSetting(alreadyVisited);
            }
        }
        $("#light-mode-switch, #dark-mode-switch").on("change", function (e) {
            updateThemeSetting(e.target.id);
        });
    }

    function updateThemeSetting(id) {
        if ($("#light-mode-switch").prop("checked") == true && id === "light-mode-switch") {
            $("#dark-mode-switch").prop("checked", false);
            $("#bootstrap-style").attr('href', '/css/bootstrap.min.css');
            $("#app-style").attr('href', '/css/app.css');
            sessionStorage.setItem("is_visited", "light-mode-switch");
        } else if ($("#dark-mode-switch").prop("checked") == true && id === "dark-mode-switch") {
            $("#light-mode-switch").prop("checked", false);
            $("#bootstrap-style").attr('href', '/css/bootstrap-dark.min.css');
            $("#app-style").attr('href', '/css/app-dark.css');
            sessionStorage.setItem("is_visited", "dark-mode-switch");
        }
    }

    function init() {
        initMetisMenu();
        initLeftMenuCollapse();
        initActiveMenu();
        initMenuItem();
        initFullScreen();
        initRightSidebar();
        initDropdownMenu();
        initComponents();
        initSettings();
        initPreloader();
        Waves.init();
    }

    init();

})(jQuery)

function check_all() {
    $("#check_all").click(function () {
        $('.item').not(this).prop('checked', this.checked);
    });
}

function ajax_csrf() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}

//sweet_alert
function block_loading() {
    $("#preloader,#status").css("display", "block")

}

function none_loading() {
    $("#preloader,#status").css("display", "none")

}

function sweet_toast(type, msg) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: type,
        title: msg
    })
}


function delete_item(msg, route_delete) {
    ajax_csrf()
    $("[data-crud='delete']").click(function () {
        var tr_children = this;
        var id = $(this).parent().attr("data-id")
        Swal.fire({
            title: msg,
            showDenyButton: false,
            confirmButtonColor: '#dc3741',
            showCancelButton: true,
            cancelButtonText: 'انصراف',
            confirmButtonText: 'حذف',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: route_delete,
                    data: {'id': id},
                    method: "POST",
                    dataType: "JSON",
                    success: function (result) {
                        if (result === "success") {
                            $(tr_children).parent().parent().remove()
                            sweet_toast('success', 'آیتم حذف شد');
                            check_all()
                        }
                        console.log(result)
                        window.location = result
                    },
                    error: function () {
                        alert("error to sending ajax data")
                    }
                })
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    })
    //Swal.fire('Saved!', '', 'success')
    //Swal.fire('Changes are not saved', '', 'info')
}

function table_ajax(url, msg, url_delete) {
    ajax_csrf()
    $("[data-crud='show_child']").click(function () {
        var sub_cats_no = $(this).attr('data-subcats-count');
        if (sub_cats_no == "0") {
            sweet_toast('error', 'زیر دسته بندی تعریف نشده')
        } else {
            block_loading()
            var parent_id = $(this).parent().attr("data-id")
            $.ajax({
                url: url,
                method: 'get',
                data: {'parent_id': parent_id},
                dataType: "html",
                success: function (result) {
                    console.log(result)

                    $("#parent_data").remove()
                    $(".page-content .row").after(result)
                    delete_item(msg, url_delete)
                    check_all()
                    console.log(result)
                },
                complete: function () {
                    none_loading()
                },
                error: function () {
                    alert("error to sending ajax data")
                }
            })
        }
    })
}

function getData(page, url, msg, url_delete) {
    $.ajax({url: '?page=' + page, type: "get", datatype: "html"})
        .done(function (data) {
            $("#parent_data .col-12").empty().html(data);
            location.hash = page;
            none_loading()
            delete_item(msg, url_delete)
            table_ajax(url, msg, url_delete)
            check_all()
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {

        })
}

function ajaxPagination(url, msg, url_delete) {
    $(document).on('click', '.pagination a', function (event) {
        block_loading()
        event.preventDefault();
        $('li').removeClass('active');
        $(this).parent('li').addClass('active');
        var myurl = $(this).attr('href');
        var page = $(this).attr('href').split('page=')[1];
        getData(page, url, msg, url_delete);
    })
}

function search_ajax(url, params, msg, url_delete) {
    block_loading()
    $.ajax({
        url: url,
        method: 'get',
        data: params,
        datatype: 'json',
        success: function (result) {
            $("#parent_data .col-12").empty().html(result);
            check_all()
            delete_item(msg, url_delete)
            table_ajax(url, msg, url_delete)
            ajaxPagination(url, msg, url_delete)
            none_loading()

        },
        error: function () {
            alert("error to sending ajax data")
        }
    })
}

function delete_all(question, route_delete_,url, msg, url_delete) {
    $("#delete_all").click(function () {
        Swal.fire({
            title: question,
            showDenyButton: false,
            confirmButtonColor: '#dc3741',
            showCancelButton: true,
            cancelButtonText: 'انصراف',
            confirmButtonText: 'حذف',
        }).then((result) => {
            if (result.isConfirmed) {
                var item_delete = [];
                $(".item:checked").each(function (index, element) {
                    item_delete.push($(this).val())
                })

                if(!$(item_delete).length == '0'){
                    $.ajax({
                        url: route_delete_,
                        method: "post",
                        data: {'item_delete': item_delete},
                        dataType: "json",
                        success: function (result) {
                            sweet_toast('success',result)
                            check_all()
                            delete_item(msg, url_delete)
                            table_ajax(url, msg, url_delete)
                            ajaxPagination(url, msg, url_delete)
                            none_loading()
                            $(item_delete).each(function (index,element) {
                                $("#"+element).remove()
                            })
                            if($("#datatable tbody tr").length == '0'){
                                $("#parent_data table").remove()
                                $("#parent_data .card-body").append("<div class='alert alert-danger'>نتیجه ای یافت نشد</div>")
                            }
                        },
                        error: function () {
                            alert("error to sending ajax data")
                        }
                    })
                }
                else{
                    sweet_toast('error', 'موردی انتخاب نشده')

                }
            }
        })
    })
}
function change_status(route_status,question, route_delete_,url, msg, url_delete){
    $(".change_state").click(function () {
        var column_name=$(this).attr('data-column')
        var item_status = [];
        $(".item:checked").each(function (index, element) {
            item_status.push($(this).val())
        })

        if(!$(item_status).length == '0'){
            block_loading()
            $.ajax({
                url: route_status,
                method: "post",
                data: {'item_status': item_status,'column_name':column_name},
                dataType: "json",
                success: function (result) {
                    sweet_toast('success',result);
                    delete_all(question, route_delete_,url, msg, url_delete)
                    none_loading();
                },
                error: function () {
                    alert("error to sending ajax data")
                }
            })
        }
        else{
            sweet_toast('error', 'موردی انتخاب نشده')

        }
    })
}
