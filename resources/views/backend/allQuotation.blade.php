@extends('backend.inc.master')

@section('content')

<section class="main-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h1 class="dashboard-title">All Quotations</h1>
            </div>
            <div class="col-6 dashboard-title text-end">
                <button data-bs-toggle="modal" data-bs-target="#addInfo" class="btn-outline">+ Add New
                    Quote</button>
            </div>
        </div>
    </div>

    <div class="container-fluid section-padding">
        <div class="row mb-5 g-4">
            <div class="col-12">
                <div class="card summary-card" style="width: 100%">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="allQuotationTable"
                                        class="table table-borderless align-middle text-center dashboardTable customTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Details</th>
                                                <th scope="col" class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!empty($customers))

                                            @foreach($customers as $customer)
                                            <tr>
                                                <td>{{$customer->name}}</td>
                                                <td>{{$customer->details}}</td>
                                                <td class="actionBtn text-center">
                                                    <button data-bs-toggle="modal" data-bs-target="#viewInfo"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="none" viewBox="0 0 24 24">
                                                            <path fill="#BDBDBD"
                                                                d="M21.92 11.6C19.9 6.91 16.1 4 12 4s-7.9 2.91-9.92 7.6a1 1 0 000 .8C4.1 17.09 7.9 20 12 20s7.9-2.91 9.92-7.6a1 1 0 000-.8zM12 18c-3.17 0-6.17-2.29-7.9-6C5.83 8.29 8.83 6 12 6s6.17 2.29 7.9 6c-1.73 3.71-4.73 6-7.9 6zm0-10a4 4 0 100 8 4 4 0 000-8zm0 6a2 2 0 110-4 2 2 0 010 4z" />
                                                        </svg>
                                                    </button>
                                                    <button data-bs-toggle="modal" data-bs-target="#editInfo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="none" viewBox="0 0 24 24">
                                                            <path fill="#BDBDBD"
                                                                d="M5 18h4.24a1 1 0 00.71-.29l6.92-6.93L19.71 8a1 1 0 000-1.42l-4.24-4.29a1 1 0 00-1.42 0l-2.82 2.83-6.94 6.93a.999.999 0 00-.29.71V17a1 1 0 001 1zm9.76-13.59l2.83 2.83-1.42 1.42-2.83-2.83 1.42-1.42zM6 13.17l5.93-5.93 2.83 2.83L8.83 16H6v-2.83zM21 20H3a1 1 0 100 2h18a1 1 0 000-2z" />
                                                        </svg>

                                                    </button>
                                                    <button data-bs-toggle="modal" data-bs-target="#deleteInfo" onclick='deleteCustomer({{ $customer->id }})'><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="none" viewBox="0 0 24 24">
                                                            <path fill="#EB5757"
                                                                d="M10 16.8a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1zm10-12h-4v-1a3 3 0 00-3-3h-2a3 3 0 00-3 3v1H4a1 1 0 000 2h1v11a3 3 0 003 3h8a3 3 0 003-3v-11h1a1 1 0 100-2zm-10-1a1 1 0 011-1h2a1 1 0 011 1v1h-4v-1zm7 14a1 1 0 01-1 1H8a1 1 0 01-1-1v-11h10v11zm-3-1a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1z" />
                                                        </svg>

                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<!-- Add Modal -->
<div class="modal custom-modal add-modal fade" id="addInfo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="#BDBDBD"
                            d="M13.41 12l6.3-6.29a1.004 1.004 0 10-1.42-1.42L12 10.59l-6.29-6.3a1.004 1.004 0 00-1.42 1.42l6.3 6.29-6.3 6.29a1 1 0 000 1.42.998.998 0 001.42 0l6.29-6.3 6.29 6.3a.999.999 0 001.42 0 1 1 0 000-1.42L13.41 12z" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form id="CustomeraddForm">@csrf
                    <div class="row">
                        <div class="col-12 form-input">
                            <label for="name">Customer Name</label>
                            <input class="form-control" type="text" placeholder="Customer Name" id="name"
                                name="name">
                        </div>
                        <div class="col-12 form-input">
                            <label for="details">Customer Details</label>
                            <input class="form-control" type="text" placeholder="Customer Details" id="details"
                                name="details">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal">Cancel</button>
                <button type="submit">Add Item</button>
            </div>
        </div>
    </div>
</div>

<!-- View Modal -->
<div class="modal custom-modal view-modal no-footer fade" id="viewInfo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Employee Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="#BDBDBD"
                            d="M13.41 12l6.3-6.29a1.004 1.004 0 10-1.42-1.42L12 10.59l-6.29-6.3a1.004 1.004 0 00-1.42 1.42l6.3 6.29-6.3 6.29a1 1 0 000 1.42.998.998 0 001.42 0l6.29-6.3 6.29 6.3a.999.999 0 001.42 0 1 1 0 000-1.42L13.41 12z" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="row ">
                    <div class="col-12">
                        <img src="assets/images/viewProfile.svg" alt="">
                    </div>
                    <div class="col-12">
                        <h6>Employee Name</h6>
                        <h5>Sheikh Waliur Rahman</h5>
                    </div>
                    <div class="col-lg-6">
                        <h6>Phone Number</h6>
                        <h5>+88016482186189</h5>
                    </div>
                    <div class="col-lg-6">
                        <h6>Email Address</h6>
                        <h5>sheikhwal@gmail.com</h5>
                    </div>
                    <div class="col-lg-6">
                        <h6>Designation</h6>
                        <h5>Tech Manager</h5>
                    </div>
                    <div class="col-lg-6">
                        <h6>Tag</h6>
                        <h5>Admin</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal custom-modal edit-modal fade" id="editInfo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="#BDBDBD"
                            d="M13.41 12l6.3-6.29a1.004 1.004 0 10-1.42-1.42L12 10.59l-6.29-6.3a1.004 1.004 0 00-1.42 1.42l6.3 6.29-6.3 6.29a1 1 0 000 1.42.998.998 0 001.42 0l6.29-6.3 6.29 6.3a.999.999 0 001.42 0 1 1 0 000-1.42L13.41 12z" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="col-12 form-input">
                            <label for="category">Category</label>
                            <select class="form-control" name="category" id="category">
                                <option value="">Select Category</option>
                                <option value="1">Category 1</option>
                            </select>
                        </div>
                        <div class="col-12 form-input">
                            <label for="email">Item Name</label>
                            <input class="form-control" type="text" placeholder="Item Name" id="name" name="name">
                        </div>
                        <div class="col-12 form-input">
                            <label for="email">Unit Price</label>
                            <input class="form-control" type="text" placeholder="Unit Price" id="name" name="name">
                        </div>
                        <div class="col-12 form-input">
                            <label for="email">Vat%</label>
                            <input class="form-control" type="text" placeholder="Vat%" id="name" name="name">
                        </div>
                        <div class="col-12 form-input">
                            <label for="Description">Description</label>
                            <textarea class="form-control" name="Description" id="Description" cols="30"
                                rows="10"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal">Cancel</button>
                <button type="button">Add Item</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal custom-modal delete-modal no-header fade" id="deleteInfo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body ">
                <div class="deleteModalBody">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 40 40">
                        <path fill="#828282"
                            d="M20 18.333A1.667 1.667 0 0018.333 20v6.667a1.667 1.667 0 103.334 0V20A1.667 1.667 0 0020 18.333zm.633-6.533a1.667 1.667 0 00-1.266 0c-.205.08-.392.198-.55.35a1.917 1.917 0 00-.35.55 1.4 1.4 0 00-.134.633 1.665 1.665 0 00.484 1.184c.162.147.348.265.55.35a1.667 1.667 0 002.3-1.534 1.75 1.75 0 00-.484-1.183 1.669 1.669 0 00-.55-.35zM20 3.333a16.667 16.667 0 100 33.334 16.667 16.667 0 000-33.334zm0 30a13.333 13.333 0 110-26.666 13.333 13.333 0 010 26.666z" />
                    </svg>

                    <h3>Delete Entry?</h3>
                    <p>Are you sure? You won’t be able to recover the entry.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal">Cancel</button>
                <button class="deleteBtn" type="button">Delete Entry</button>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
        $('.dropify').dropify();

        var datatable;
        $(document).ready(function () {
            datatable = $('#allQuotationTable').DataTable();
        });


        $(document).on('keyup', '#search-input', function () {
            var value = $(this).val();
            datatable.search(value).draw();
        });
    </script>
@section('pageScripts')
<script>
    
    var toastMixin = Swal.mixin({
            toast: true,
            title: 'General Title',
            animation: false,
            position: 'top-right',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        var config = {
            routes: {
                add: "{!! route('store-customer') !!}",
                edit: "{!! route('edit-customer') !!}",
                update: "{!! route('update-customer') !!}",
                delete: "{!! route('delete-customer') !!}",
            }
        };
	$(document).ready(function() {
            // data table
            $('#allQuotationTable').DataTable({
                "ordering": false,
            });
            // dropify table
            $('.dropify').dropify();
        });

    // add form validation
    $(document).ready(function() {
            $("#CustomeraddForm").validate({
                rules: {
                    name: {
                        required: true,
                        maxlength: 50,
                    },
                    details: {
                        required: true,
                        maxlength: 2000,
                    },
                },
                messages: {
                    name: {
                        required: 'Please insert  name',
                    },
                    details: {
                        required: 'Please insert details',
                    },
                    
                },
                errorPlacement: function(label, element) {
                    label.addClass('mt-2 text-danger');
                    label.insertAfter(element);
                },
            });

            $("#CustomereditForm").validate({
                rules: {
                    name: {
                        required: true,
                        maxlength: 50,
                    },
                    details: {
                        required: true,
                        maxlength: 2000,
                    },
                },
                messages: {
                    name: {
                        required: 'Please insert  name',
                    },
                    details: {
                        required: 'Please insert details',
                    },
                    
                },
                errorPlacement: function(label, element) {
                    label.addClass('mt-2 text-danger');
                    label.insertAfter(element);
                },
            });
        });

    // add  request

    $(document).off('submit', '#CustomeraddForm');
        $(document).on('submit', '#CustomeraddForm', function(event) {
            event.preventDefault();
            $.ajax({
                url: config.routes.add,
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json",
                success: function(response) {

                    if (response.success == true) {
                        var allQuotationTable = $('#allQuotationTable').DataTable();
                        var trDOM = allQuotationTable.row.add([
                            "" + response.data.name + "",
                            "" + response.data.details + "...",
                            `
                            // <button  onclick='viewFrequency(${response.data.id})'><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            //         height="24" fill="none" viewBox="0 0 24 24">
                            //         <path fill="#BDBDBD"
                            //             d="M21.92 11.6C19.9 6.91 16.1 4 12 4s-7.9 2.91-9.92 7.6a1 1 0 000 .8C4.1 17.09 7.9 20 12 20s7.9-2.91 9.92-7.6a1 1 0 000-.8zM12 18c-3.17 0-6.17-2.29-7.9-6C5.83 8.29 8.83 6 12 6s6.17 2.29 7.9 6c-1.73 3.71-4.73 6-7.9 6zm0-10a4 4 0 100 8 4 4 0 000-8zm0 6a2 2 0 110-4 2 2 0 010 4z" />
                            //     </svg>
                            // </button>
                            // <button  onclick='editFrequency(${response.data.id})'><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            //         height="24" fill="none" viewBox="0 0 24 24">
                            //         <path fill="#BDBDBD"
                            //             d="M5 18h4.24a1 1 0 00.71-.29l6.92-6.93L19.71 8a1 1 0 000-1.42l-4.24-4.29a1 1 0 00-1.42 0l-2.82 2.83-6.94 6.93a.999.999 0 00-.29.71V17a1 1 0 001 1zm9.76-13.59l2.83 2.83-1.42 1.42-2.83-2.83 1.42-1.42zM6 13.17l5.93-5.93 2.83 2.83L8.83 16H6v-2.83zM21 20H3a1 1 0 100 2h18a1 1 0 000-2z" />
                            //     </svg>

                            // </button>
                            // <button onclick='deleteFrequency(${response.data.id})'><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            //         height="24" fill="none" viewBox="0 0 24 24">
                            //         <path fill="#EB5757"
                            //             d="M10 16.8a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1zm10-12h-4v-1a3 3 0 00-3-3h-2a3 3 0 00-3 3v1H4a1 1 0 000 2h1v11a3 3 0 003 3h8a3 3 0 003-3v-11h1a1 1 0 100-2zm-10-1a1 1 0 011-1h2a1 1 0 011 1v1h-4v-1zm7 14a1 1 0 01-1 1H8a1 1 0 01-1-1v-11h10v11zm-3-1a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1z" />
                            //     </svg>

                            </button>
                            `
                        ]).draw().node();
                        $(trDOM).addClass('item' + response.data.id + '');
                        $('table tr:last td:last').addClass('actionBtn text-center');
                        $('#CustomeraddForm').trigger('reset');
                        if (response.data.message) {
                        	$('#addInfo').modal('hide');
                            toastMixin.fire({
                                icon: 'success',
                                animation: true,
                                title: "" + response.data.message + ""
                            });

                        }


                    } else {
                         Swal.fire({
                          position: 'top-end',
                          icon: 'warning',
                          title: response.data.error,
                          showConfirmButton: false,
                          timer: 1500
                        })
                    }
                }, //success end

                // beforeSend: function() {
                //     $('#add').modal('hide');
                //     $('.preloader').empty();
                //     $('.preloader').addClass('ajax_loader').append(
                //         `<div class='preloader'>
                //             <div id="status">
                //                 <div class="spinner"></div>
                //             </div>
                //         </div>`
                //     );
                // },
                // complete: function() {
                //     $('.preloader').removeClass('ajax_loader').empty();
                // }
            });
        });

    // delete 
    function deleteCustomer(id) {
        // alert(id)
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: config.routes.delete,
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'JSON',
                    success: function(response) {

                         if (response.success === true) {
                            Swal.fire(
                                'Deleted!',
                                "" + response.data.message + "",
                                'success'
                            )
                            // swal("Done!", response.data.message, "success");
                            $('#allQuotationTable').DataTable().row('.item' + response.data.id).remove()
                                .draw();
                        } else {
                            Swal.fire("Error!", "Can't delete item", "error");
                        }
                    }
                });

            }
        })


    }


    //end
</script>

@endsection