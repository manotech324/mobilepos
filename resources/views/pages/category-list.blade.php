@extends('layouts.app')
@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper">



        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="add-item d-flex">
                        <div class="page-title">
                            <h4 class="fw-bold">Category</h4>
                            <h6>Manage your categories</h6>
                        </div>
                    </div>
                    <ul class="table-top-head">
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img
                                    src="/assets/img/icons/pdf.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img
                                    src="/assets/img/icons/excel.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i
                                    class="ti ti-refresh"></i></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                    class="ti ti-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="page-btn">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-category"><i
                                class="ti ti-circle-plus me-1"></i>Add Category</a>
                    </div>
                </div>
                <!-- /product list -->
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                        <div class="search-set">
                            <div class="search-input">
                                <span class="btn-searchset"><i class="ti ti-search fs-14 feather-search"></i></span>
                            </div>
                        </div>
                        <div class="d-flex table-dropdown my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle btn btn-white btn-md d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    Status
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
                                    </li>
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
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox" name="selected[]" value="{{ $category->id }}">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->created_at->format('d M Y') }}</td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    {{-- Eye Icon (optional) --}}
                                                    <a class="me-2 p-2" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                            </path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </a>

                                                    {{-- Edit Action --}}
                                                    <a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-id="{{ $category->id }}" data-name="{{ $category->name }}"
                                                        onclick="fillEditModal(this)" data-bs-target="#edit-category">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-edit">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                            </path>
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                            </path>
                                                        </svg>
                                                    </a>

                                                    {{-- Delete Form --}}
                                                    <form method="POST" action="{{ route('product-category.delete') }}"
                                                        id="delete-product-{{ $category->id }}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $category->id }}">
                                                        <a onclick="setDeleteId({{ $category->id }})" class="p-2"
                                                            href="javascript:void(0);" data-bs-toggle="modal"
                                                            data-bs-target="#delete-modal">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash-2">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4
                      a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg>
                                                        </a>
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
                <!-- /product list -->
            </div>
            <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
                <p class="mb-0 text-gray-9">2014 - 2025 &copy; DreamsPOS. All Right Reserved</p>
                <p>Designed &amp; Developed by <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- Add Category -->
    <div class="modal fade" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="page-title">
                        <h4>Add Category</h4>
                    </div>
                    <button type="button" class="close bg-danger text-white fs-16" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('product-category.create') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Category Name <span class="text-danger ms-1">*</span></label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback d-block"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-2 btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- /Add Category -->

    <!-- Edit Category -->
    <div class="modal fade" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="page-title">
                        <h4>Edit Category</h4>
                    </div>
                    <button type="button" class="close bg-danger text-white fs-16" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" id="form">
                    @csrf
                    <input type="hidden" name="id" id="edit-category-id">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Category Name<span class="text-danger ms-1">*</span></label>
                            <input type="text" name="name" id="edit-category-name"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="invalid-feedback d-block"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-2 btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- delete modal -->
    <div class="modal fade" id="delete-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content p-5 px-3 text-center">
                        <span class="rounded-circle d-inline-flex p-2 bg-danger-transparent mb-2"><i
                                class="ti ti-trash fs-24 text-danger"></i></span>
                        <h4 class="fs-20 fw-bold mb-2 mt-1">Delete Category</h4>
                        <p class="mb-0 fs-16">Are you sure you want to delete category?</p>
                        <div class="modal-footer-btn mt-3 d-flex justify-content-center">
                            <button type="button" class="btn me-2 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="button" onclick="deleteCategory()"
                                class="btn btn-primary fs-13 fw-medium p-2 px-3">Yes Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /Edit Category -->

    <script>
        let currentDeleteId = null;

        function setDeleteId(id) {
            currentDeleteId = id;
        }

        function deleteCategory() {
            if (currentDeleteId !== null) {
                const form = document.getElementById(`delete-product-${currentDeleteId}`);
                if (form) {
                    form.submit();
                }
            }
        }
    </script>
    <script>
        function fillEditModal(el) {
            const id = el.getAttribute('data-id');
            const name = el.getAttribute('data-name');

            document.getElementById('edit-category-name').value = name;

            document.getElementById('form').action = `/dashboard/product-category/update/${id}`;
        }
    </script>
@endsection
