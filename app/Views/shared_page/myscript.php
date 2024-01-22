<script type="text/javascript">
    $(document).on('click', '#menu', function() {
        $('.modal-body #id_menu').val($(this).data('id_menu'));
        $('.modal-body #nama_menu').val($(this).data('nama_menu'));
        $('.modal-body #url').val($(this).data('url'));
        $('.modal-body #icon').val($(this).data('icon'));
        $('.modal-body #nama_level').val($(this).data('nama_level'));
        $('.modal-body #urutan').val($(this).data('urutan'));
    });
    $(document).on('click', '.btn-editprofile', function() {
        $('.modal-body #id_user').val($(this).data('id_user'));
        $('.modal-body #nama').val($(this).data('nama'));
        $('.modal-body #nik').val($(this).data('nik'));
        $('.modal-body #username').val($(this).data('username'));
        $('.modal-body #jabatan').val($(this).data('jabatan'));
        $('.modal-body #alamat').val($(this).data('alamat'));
        $('.modal-body #photo').val($(this).data('photo'));
    });
    $(document).on('click', '.btn-detilUser', function() {
        $('.modal-body #nama').val($(this).data('nama'));
        $('.modal-body #nik').val($(this).data('nik'));
        $('.modal-body #alamat').val($(this).data('alamat'));
        $('.modal-body #nama_divisi').val($(this).data('nama_divisi'));
        $('.modal-body #jabatan').val($(this).data('jabatan'));
        $('.modal-body #gapok').val($(this).data('gapok'));
        $('.modal-body #tfungsional').val($(this).data('tfungsional'));
        $('.modal-body #umakan').val($(this).data('umakan'));
        $('.modal-body #username').val($(this).data('username'));
        $('.modal-body #nama_level').val($(this).data('nama_level'));
        $('.modal-body #status').val($(this).data('status'));
    });

    $(document).ready(function() {
        // nonaktifkan user
        $(document).on("click", ".btn-usernonaktifkan", function() {
            var id_user = $(this).data("id")
            var konfirm = confirm('Yakin akan mengubah status user ini ?')
            if (konfirm) {
                $.ajax({
                    url: "/admin/manuser/nonaktif",
                    data: {
                        id: id_user
                    },
                    dataType: "json",
                    success: function(responds) {
                        if (responds.status) {
                            toastr.success(responds.psn)
                            tampil_tabel_user()
                        } else {
                            alert('Data gagal dinonaktifkan')
                        }
                    }
                });
            }
        })
        // aktifkan user
        $(document).on("click", ".btn-useraktifkan", function() {
            var id_user = $(this).data("id")
            var konfirm = confirm('Yakin akan mengubah status user ini ?')
            if (konfirm) {
                $.ajax({
                    url: "/admin/manuser/aktif",
                    data: {
                        id: id_user
                    },
                    dataType: "json",
                    success: function(responds) {
                        if (responds.status) {
                            toastr.success(responds.psn)
                            tampil_tabel_user()
                        } else {
                            alert('Data gagal dinonaktifkan')
                        }
                    }
                });
            }
        })
        // delete user
        $(document).on("click", ".btn-deleteuser", function() {
            var id_user = $(this).data('id')
            var konfirm = confirm('Yakin akan menghapus data ini ?')
            if (konfirm) {
                $.ajax({
                    url: "/admin/manuser/hapus",
                    data: {
                        id: id_user
                    },
                    dataType: "json",
                    success: function(responds) {
                        toastr.error(responds.psn)
                        tampil_tabel_user()
                    }
                });
            }
        })
        // import user 
        $(document).on("submit", ".import-dtuser", function(e) {
            e.preventDefault()
            var data_iuser = new FormData(this);
            $.ajax({
                method: "post",
                url: $(this).attr("action"),
                data: data_iuser,
                enctype: "multipart/form-data",
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(responds) {
                    if (responds.status) {
                        toastr.success(responds.psn)
                        tampil_tabel_user()
                    } else {
                        toastr.error(responds.psn)
                    }
                }
            });
        })

        //divisi
        $(document).on("click", ".fadd-divisi", function() {
            $.ajax({
                url: "/admin/divisi/tambah",
                dataType: "json",
                success: function(responds) {
                    $(".form-modal").html(responds)
                    $(".modal").modal("toggle")
                }
            });
        })
        // fedit divisi
        $(document).on("click", ".edit-divisi", function() {
            var id_divisi = $(this).data('id')
            var konfirm = confirm('Yakin mengedit data ini ?')
            if (konfirm) {
                $.ajax({
                    url: "/admin/divisi/edit",
                    data: {
                        id: id_divisi
                    },
                    dataType: "json",
                    success: function(responds) {
                        $(".form-modal").html(responds)
                        $(".modal").modal("toggle")
                    }
                });
            }
        })
        // edit divisi
        $(document).on("submit", "#fedit_divisi", function(e) {
            e.preventDefault()
            $.ajax({
                url: $(this).attr("action"),
                data: $(this).serialize(),
                dataType: "json",
                success: function(responds) {
                    if (responds.status) {
                        toastr.success(responds.psn)
                        $(".modal").modal("toggle")
                    } else {
                        toastr.error('Data Divisi belum valid, ulangi lagi')
                        $.each(responds.errors, function(key, value) {
                            $('[name="' + key + '"]').addClass('is-invalid')
                            $('[name="' + key + '"]').next().text(value)
                            if (value == "") {
                                $('[name="' + key + '"]').removeClass('is-invalid')
                                $('[name="' + key + '"]').addClass('is-valid')
                            }
                        })
                    }
                }
            });
        })
        // tambah divisi
        $(document).on("submit", "#add_divisi", function(e) {
            e.preventDefault()
            $.ajax({
                url: $(this).attr("action"),
                data: $(this).serialize(),
                dataType: "json",
                success: function(responds) {
                    if (responds.status) {
                        toastr.success(responds.psn)
                        $(".modal").modal("toggle")
                    } else {
                        toastr.error('Data Divisi belum valid, ulangi lagi')
                        $.each(responds.errors, function(key, value) {
                            $('[name="' + key + '"]').addClass('is-invalid')
                            $('[name="' + key + '"]').next().text(value)
                            if (value == "") {
                                $('[name="' + key + '"]').removeClass('is-invalid')
                                $('[name="' + key + '"]').addClass('is-valid')
                            }
                        })
                    }
                }
            });
        })
        // delete divisi
        $(document).on("click", ".del-divisi", function() {
            var id_divisi = $(this).data('id')
            var konfirm = confirm('Yakin akan menghapus data ini ?')
            if (konfirm) {
                $.ajax({
                    url: "/admin/divisi/hapus",
                    data: {
                        id: id_divisi
                    },
                    dataType: "json",
                    success: function(responds) {
                        toastr.error(responds.psn)
                    }
                });
            }
        })

        $(document).on("submit", "#import_karyawan", function(e) {
            e.preventDefault()
            var data_user = new FormData(this);
            $.ajax({
                method: "post",
                url: $(this).attr("action"),
                data: data_user,
                enctype: "multipart/form-data",
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(responds) {
                    if (responds.status) {
                        toastr.success(responds.psn)
                        $(".mdl-importtuser").modal("toggle")
                    } else {
                        toastr.error('Data belum valid, ulangi lagi')
                    }
                }
            });
        })

        // validasi tambah menu
        $('#tambah_menu').validate({
            rules: {
                nama_menu: {
                    minlength: 5,
                    required: true,
                },
                url: {
                    minlength: 5,
                    required: true,
                },
                icon: {
                    required: true,
                    minlength: 5
                },
                level_id: {
                    required: true,
                },
                urutan: {
                    number: true,
                    required: true
                },
            },
            messages: {
                nama_menu: {
                    minlength: "Minimal 5 karakter",
                    required: "Harus diisi"
                },
                url: {
                    minlength: "Minimal 5 karakter",
                    required: "Harus diisi",
                },
                icon: {
                    required: "Harus diisi",
                    minlength: "Minimal 5 karakter"
                },
                level_id: {
                    required: "Harus diisi",
                },
                urutan: {
                    number: "Harus angka",
                    required: "Harus diisi"
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
        // validasi edit menu
        $('#edit_menu').validate({
            rules: {
                nama_menu: {
                    minlength: 5,
                    required: true,
                },
                url: {
                    minlength: 5,
                    required: true,
                },
                icon: {
                    required: true,
                    minlength: 5
                },
                level_id: {
                    required: true,
                },
                urutan: {
                    number: true,
                    required: true
                },
            },
            messages: {
                nama_menu: {
                    minlength: "Minimal 5 karakter",
                    required: "Harus diisi"
                },
                url: {
                    minlength: "Minimal 5 karakter",
                    required: "Harus diisi",
                },
                icon: {
                    required: "Harus diisi",
                    minlength: "Minimal 5 karakter"
                },
                level_id: {
                    required: "Harus diisi",
                },
                urutan: {
                    number: "Harus angka",
                    required: "Harus diisi"
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });

        // validasi register user
        $('#register').validate({
            rules: {
                nama: {
                    minlength: 5,
                    required: true,
                },
                username: {
                    minlength: 5,
                    required: true,
                },
                password1: {
                    required: true,
                    minlength: 5
                },
                password2: {
                    required: true,
                    minlength: 5
                },
                level: {
                    required: true
                },
                divisi: {
                    required: true
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });

        // validasi reset password
        $('#password').validate({
            rules: {
                pss1: {
                    minlength: 5,
                    required: true,
                },
                pss2: {
                    minlength: 5,
                    required: true,
                }
            },
            messages: {
                pss1: {
                    minlength: "Minimal 5 karakter",
                    required: "Harus diisi"
                },
                pss2: {
                    minlength: "Minimal 5 karakter",
                    required: "Harus diisi",
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });

        // form tambah gaji
        $(document).on("click", ".btn-fadd-gaji", function() {
            $.ajax({
                url: "/manager/kelolagaji/tambah",
                dataType: "json",
                success: function(responds) {
                    $(".form-modal").html(responds)
                    $(".mdlAddGaji").modal("toggle")
                }
            });
        })
        // simpan tambah gaji
        $(document).on("submit", "#add_gaji", function(e) {
            e.preventDefault()
            $.ajax({
                url: $(this).attr("action"),
                data: $(this).serialize(),
                method: "post",
                dataType: "json",
                success: function(responds) {
                    console.log(responds)
                    if (responds.status) {
                        $(".mdlAddGaji").modal("toggle")
                        toastr.success(responds.psn)
                        tampil_tabel_gaji()
                    } else {
                        // alert(responds)
                        toastr.error(responds.psn)
                        $.each(responds.errors, function(key, value) {
                            $('[name="' + key + '"]').addClass('is-invalid')
                            $('[name="' + key + '"]').next().text(value)
                            if (value == "") {
                                $('[name="' + key + '"]').removeClass('is-invalid')
                                $('[name="' + key + '"]').addClass('is-valid')
                            }
                        })
                    }
                }
            });
        })
        // fedit gaji
        $(document).on("click", ".btn-editgaji", function() {
            var id_gaji = $(this).data("id")
            var nama_karyawan = $(this).data("nama")
            var konfirm = confirm('Yakin akan mengedit data gaji ' + nama_karyawan + ' ?')
            if (konfirm) {
                $.ajax({
                    url: "/manager/kelolagaji/edit",
                    data: {
                        id: id_gaji
                    },
                    dataType: "json",
                    success: function(responds) {
                        $(".form-modal").html(responds)
                        $(".mdlEditGaji").modal("toggle")
                    }
                });
            }
        })
        // edit gaji
        $(document).on("submit", "#form-edit_gaji", function(e) {
            e.preventDefault()
            var data_user = new FormData(this);
            $.ajax({
                method: "post",
                url: $(this).attr("action"),
                data: data_user,
                enctype: "multipart/form-data",
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(responds) {
                    if (responds.status) {
                        toastr.success(responds.psn)
                        $(".mdlEditGaji").modal("toggle")
                        tampil_tabel_gaji()
                    } else {
                        toastr.error('Data belum valid, ulangi lagi')
                        $.each(responds.errors, function(key, value) {
                            $('[name="' + key + '"]').addClass('is-invalid')
                            $('[name="' + key + '"]').next().text(value)
                            if (value == "") {
                                $('[name="' + key + '"]').removeClass('is-invalid')
                                $('[name="' + key + '"]').addClass('is-valid')
                            }
                        })
                    }
                }
            });
        })
        // fdelete gaji
        $(document).on("click", ".btn-deletegaji", function() {
            var id_gaji = $(this).data("id")
            $.ajax({
                url: "/manager/kelolagaji/form_hapus",
                method: "post",
                data: {
                    id: id_gaji
                },
                dataType: "json",
                success: function(responds) {
                    $(".form-modal").html(responds)
                    $(".mdlHapusGaji").modal("toggle")
                }
            });
        })
        // delete gaji
        $(document).on("submit", "#form-hapus_gaji", function(e) {
            e.preventDefault()
            var data_gaji = new FormData(this);
            $.ajax({
                method: "post",
                url: $(this).attr("action"),
                data: data_gaji,
                enctype: "multipart/form-data",
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(responds) {
                    if (responds.status) {
                        $(".mdlHapusGaji").modal("toggle")
                        toastr.success(responds.psn)
                        tampil_tabel_gaji()
                    } else {
                        toastr.error('Data gagal dihapus')
                        tampil_tabel_gaji()
                    }
                }
            });
        })
        // cetak gaji
        $(document).on("click", ".btn-cetakGaji", function(e) {
            var id_gaji = $(this).data("id")
            var nama_karyawan = $(this).data("nama")
            var konfirm = confirm('Akan melihat/mencetak slip gaji ' + nama_karyawan + ' ?')
            if (konfirm) {
                $.ajax({
                    url: "/manager/cetakpdf",
                    data: {
                        id: id_gaji
                    },
                    dataType: "json",
                    success: function(responds) {
                        $(".form-modal").html(responds)
                        $(".mdlCetaktGaji").modal("toggle")
                    }
                });
            }
        })
        // import gaji 
        $(document).on("submit", ".import-gaji", function(e) {
            e.preventDefault()
            var data_gaji = new FormData(this);
            $.ajax({
                method: "post",
                url: $(this).attr("action"),
                data: data_gaji,
                enctype: "multipart/form-data",
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(responds) {
                    if (responds.status) {
                        toastr.success(responds.psn)
                        tampil_tabel_gaji()
                    } else {
                        toastr.error(responds.psn)
                    }
                }
            });
        })

        // validasi edit profile
        $('#fedit_profile').validate({
            rules: {
                nama: {
                    minlength: 5,
                    required: true,
                },
                username: {
                    email: true,
                    required: true,
                },
                alamat: {
                    minlength: 5,
                    required: true,
                },
            },
            messages: {
                nama: {
                    minlength: "Minimal 5 karakter",
                    required: "Harus diisi"
                },
                username: {
                    email: "Harus valid email",
                    required: "Harus diisi",
                },
                alamat: {
                    minlength: "Minimal 5 karakter",
                    required: "Harus diisi",
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });

        // validasi import dt karyawan
        $('#import_karyawan').validate({
            rules: {
                fileexcel: {
                    required: true,
                },
            },
            messages: {
                fileexcel: {
                    required: "Harus diisi"
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>