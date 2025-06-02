<x-dashboard-layout title="Suppliers">
    @if (session('supplier_with_brand'))
        <div class="alert alert-success">Supplier created successfully!</div>
    @endif
    @if (session('deleted_supplier'))
        <div class="alert alert-success">Supplier deleted successfully!</div>
    @endif
    @if (session('updated_supplier'))
        <div class="alert alert-success">Supplier updated successfully!</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">Their is any error!</div>
    @endif


    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4>Suppliers</h4>
                <h6>Manage your suppliers</h6>
            </div>
        </div>
        <ul class="table-top-head">
            <li class="me-2">
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf">
                    <img src="/assets/img/icons/pdf.svg" alt="img">
                </a>
            </li>
            <li class="me-2">
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel">
                    <img src="/assets/img/icons/excel.svg" alt="img">
                </a>
            </li>
            <li class="me-2">
                <a data-bs-toggle="tooltip" href="{{ route('supplier.index') }}" data-bs-placement="top"
                    title="Refresh">
                    <i class="ti ti-refresh"></i>
                </a>
            </li>
            <li class="me-2">
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header">
                    <i class="ti ti-chevron-up"></i>
                </a>
            </li>
        </ul>
        <div class="page-btn">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-supplier">
                <i class="ti ti-circle-plus me-1"></i>Add Supplier
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <div class="search-set">
                <div class="search-input">
                    <span class="btn-searchset">
                        <i class="ti ti-search fs-14 feather-search"></i>
                    </span>
                </div>
            </div>
            <div class="d-flex table-dropdown my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                <div class="dropdown">
                    <a href="javascript:void(0);"
                        class="dropdown-toggle btn btn-white btn-md d-inline-flex align-items-center"
                        data-bs-toggle="dropdown">
                        Status
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-3">
                        <li><a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a></li>
                        <li><a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table datatable">
                    <thead class="thead-light">
                        <tr>
                            <th class="no-sort">
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all">
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Id</th>
                            <th>Supplier Name</th>
                            <th>Supplier Email</th>
                            <th>Supplier Phone</th>
                            <th>Supplier Image</th>
                            <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label=": activate to sort column ascending"
                                style="width: 124.05px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-medium text-dark">{{ $supplier->id }}</p>
                                </td>
                                <td>
                                    <p class="fw-medium text-dark">{{ $supplier->name }}</p>
                                </td>
                                <td>
                                    <p class="fw-medium text-dark">{{ $supplier->email }}</p>
                                </td>
                                <td>
                                    <p class="fw-medium text-dark">{{ $supplier->phone }}</p>
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $supplier->image) ?? '/default/supplier.png' }}"
                                        width="40" height="40" />
                                </td>
                                <td class="action-table-data">
                                    <div class="edit-delete-action">
                                        <a class="me-2 p-2" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </a>
                                        <a class="me-2 p-2" onclick="fetchSupplier({{ $supplier->id }})"
                                            href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#edit-supplier">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                </path>
                                            </svg>
                                        </a>

                                        <script>
                                            async function fetchSupplier(id) {
                                                try {



                                                    const response = await fetch('{{ route('supplier.edit', ['id' => $supplier->id]) }}', {
                                                        method: 'GET',
                                                    });

                                                    if (!response.ok) {
                                                        throw new Error('Failed to fetch supplier data: ' + response.statusText);
                                                    }

                                                    const data = await response.json();

                                                    const supplier = data.supplier ?? data;
                                                    const form = document.querySelector('#edit-supplier form');
                                                    form.action = '{{ url('dashboard/supplier/update') }}/' + supplier.id;
                                                    document.getElementById('name').value = supplier.name || '';
                                                    document.getElementById('email').value = supplier.email || '';
                                                    document.getElementById('phone').value = supplier.phone || '';
                                                    document.getElementById('brand').value = supplier.brand ||
                                                        '';

                                                    const imagePreview = document.getElementById('supplierImagePreview');
                                                    if (supplier.image) {
                                                        imagePreview.src = '{{ asset('storage') }}/' + supplier.image;
                                                    } else {
                                                        imagePreview.src =
                                                            'https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/supplier/edit-supplier.jpg';
                                                    }


                                                } catch (error) {
                                                    alert(error.message);
                                                }
                                            }
                                        </script>

                                        <form method="POST" action="{{ route('supplier.delete') }}"
                                            id="delete-supplier">
                                            @csrf
                                            <a class="p-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10"
                                                        y2="17">
                                                    </line>
                                                    <line x1="14" y1="11" x2="14"
                                                        y2="17">
                                                    </line>
                                                </svg>
                                            </a>
                                            <input type="hidden" name="id" value="{{ $supplier->id }}" />
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
        <p class="mb-0">2014 - 2025 &copy; DreamsPOS. All Right Reserved</p>
        <p>Designed &amp; Developed by <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
    </div <x-slot name="modals">

    {{-- Add --}}
    <div class="modal" id="add-supplier" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="page-title">
                        <h4>Add Supplier</h4>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('supplier.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <!-- Image Upload -->
                            <div class="col-lg-12">
                                <div class="profile-pic-upload mb-2">
                                    <div class="profile-pic">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus-circle plus-down-add">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16">
                                                </line>
                                                <line x1="8" y1="12" x2="16" y2="12">
                                                </line>
                                            </svg> Add Image
                                        </span>
                                    </div>
                                    <div class="image-upload mb-2">
                                        <input type="file" name="image"
                                            class="@error('image')
                                                is-invalid
                                            @enderror"
                                            accept="image/jpeg,image/png">
                                        <div class="image-uploads">
                                            <h4>Upload Image</h4>
                                        </div>
                                        @error('image')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <p>JPEG, PNG up to 2 MB</p>
                                </div>
                            </div>

                            <!-- Name -->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('name')
                                            is-invalid
                                        @enderror"
                                        name="name">
                                    @error('name')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email"
                                        class="form-control @error('email')
                                            is-invalid
                                        @enderror"
                                        name="email">
                                    @error('email')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Phone <span class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('phone')
                                            is-invalid
                                        @enderror"
                                        name="phone">
                                    @error('phone')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Supplier Brand <span
                                            class="text-danger ">*</span></label>
                                    <input type="text"
                                        class="form-control @error('brand')
                                        is-invalid
                                    @enderror"
                                        name="brand">
                                    @error('brand')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                        </div>
                    </div>




                    <div class="modal-footer">
                        <button type="button" class="btn me-2 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary fs-13 fw-medium p-2 px-3">Add
                            Supplier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Update --}}
    <div class="modal fade" id="edit-supplier" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Supplier</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body text-center">
                        <!-- Image Preview & Upload -->
                        <div class="mb-3 position-relative d-inline-block">
                            <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/supplier/edit-supplier.jpg"
                                alt="Supplier Image" id="supplierImagePreview"
                                style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%;" />
                            <button type="button" class="btn-close position-absolute top-0 end-0"
                                aria-label="Remove Image" onclick="removeImage()"
                                style="background: rgba(255,255,255,0.8);"></button>
                        </div>
                        <div>
                            <label for="imageUpload" class="btn btn-sm btn-outline-primary mt-2">Change
                                Image</label>
                            <input type="file" id="imageUpload" name="image" accept="image/*"
                                style="display:none;" onchange="previewImage(event)" />
                        </div>

                        <!-- Fields -->
                        <div class="mb-3 mt-4 text-start">
                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="Apex Computers" required>
                        </div>

                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="carlevans@example.com" required>
                        </div>

                        <div class="mb-3 text-start">
                            <label for="brand" class="form-label">Brand <span class="text-danger">*</span></label>
                            <input type="text" name="brand" id="brand" class="form-control"
                                value="Apex Brand" required>
                        </div>

                        <div class="mb-3 text-start">
                            <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                value="+15964712634" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    {{-- Delete --}}
    <div class="modal fade" id="delete-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-5">
                <div class="modal-body text-center p-0">
                    <span class="rounded-circle d-inline-flex p-2 bg-danger-transparent mb-2"><i
                            class="ti ti-trash fs-24 text-danger"></i></span>
                    <h4 class="fs-20 text-gray-9 fw-bold mb-2 mt-1">Delete Supplier</h4>
                    <p class="text-gray-6 mb-0 fs-16">Are you sure you want to delete supplier?</p>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn me-2 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none"
                            data-bs-dismiss="modal">Cancel</a>
                        <a href="" href="javascript:void(0);" data-bs-toggle="modal"
                            data-bs-target="#delete-modal" class="btn btn-primary fs-13 fw-medium p-2 px-3"
                            onclick="deleteSupplier()">Yes Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteSupplier() {
            document.getElementById("delete-supplier").submit();
        }
    </script>

    </x-slot>



</x-dashboard-layout>
