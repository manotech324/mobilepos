@extends('layouts.app')
@section('content')
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Stores</h4>
								<h6>Manage your Store</h6>
							</div>
						</div>
						<ul class="table-top-head">
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="{{ asset('assets/img/icons/pdf.svg') }}" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="{{ asset('assets/img/icons/excel.svg') }}" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer" class="feather-rotate-ccw"></i></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i class="ti ti-refresh"></i></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i class="ti ti-chevron-up"></i></a>
							</li>
						</ul>
						<div class="page-btn">
							<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-store"><i class="ti ti-circle-plus me-1"></i>Add Store</a>
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
									<a href="javascript:void(0);" class="dropdown-toggle btn btn-white btn-md d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
											<th>Store</th>
											<th>User Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Status</th>
											<th class="no-sort"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="text-gray-9">Electro Mart</td>
											<td>
												johnsmith
											</td>
											<td>
												<a href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="244148414750564b4945565064415c45495448410a474b49">[email&#160;protected]</a>						
											</td>
											<td>+12498345785</td>											
											<td>
												<span class="badge badge-success d-inline-flex align-items-center badge-xs">
													<i class="ti ti-point-filled me-1"></i>Active
												</span>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-store">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>									
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="text-gray-9">Quantum Gadgets</td>
											<td>
												janedoe
											</td>
											<td>
												<a href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="324347535c46475f72574a535f425e571c515d5f">[email&#160;protected]</a>								
											</td>
											<td>+13178964582 </td>											
											<td>
												<span class="badge badge-success d-inline-flex align-items-center badge-xs">
													<i class="ti ti-point-filled me-1"></i>Active
												</span>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-store">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>												
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="text-gray-9">Prime Bazaar</td>
											<td>
												sarahlee
											</td>											
											<td>
												<a href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="710103181c1413100b101003311409101c011d145f121e1c">[email&#160;protected]</a>								
											</td>
											<td>+12796183487 </td>											
											<td>
												<span class="badge badge-success d-inline-flex align-items-center badge-xs">
													<i class="ti ti-point-filled me-1"></i>Active
												</span>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-store">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
												
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="text-gray-9">Gadget World</td>
											<td>
												alexbrown
											</td>										
											<td>
												<a href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b1c1a1f1c1e0f0c1409171f3b1e031a160b171e55181416">[email&#160;protected]</a>								
											</td>
											<td>+17538647943 </td>											
											<td>
												<span class="badge badge-success d-inline-flex align-items-center badge-xs">
													<i class="ti ti-point-filled me-1"></i>Active
												</span>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-store">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
												
											</td>
										</tr>	
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="text-gray-9">Volt Vault</td>
											<td>
												jesswhite
											</td>											
											<td>
												<a href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f680999a828097839a82b6938e979b869a93d895999b">[email&#160;protected]</a>								
											</td>
											<td>+13798132475</td>
											<td>
												<span class="badge badge-success d-inline-flex align-items-center badge-xs">
													<i class="ti ti-point-filled me-1"></i>Active
												</span>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-store">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>												
											</td>
										</tr>	
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="text-gray-9">Elite Retail</td>
											<td>
												emilydavis
											</td>
											<td>
												<a href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97f2fbfee3f2e5f2e3f6fefbd7f2eff6fae7fbf2b9f4f8fa">[email&#160;protected]</a>								
											</td>
											<td>+17596341894</td>											
											<td>
												<span class="badge badge-success d-inline-flex align-items-center badge-xs">
													<i class="ti ti-point-filled me-1"></i>Active
												</span>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-store">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
												
											</td>
										</tr>	
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="text-gray-9">Prime Mart</td>
											<td>
												tomharris
											</td>											
											<td>
												<a href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cfbfbda6a2aaa2aebdbb8faab7aea2bfa3aae1aca0a2">[email&#160;protected]</a>							
											</td>
											<td>+12973548678</td>
											<td>
												<span class="badge badge-success d-inline-flex align-items-center badge-xs">
													<i class="ti ti-point-filled me-1"></i>Active
												</span>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-store">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>	
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="text-gray-9">NeoTech Store</td>
											<td>
												sarahjohnson
											</td>										
											<td>
												<a href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7b9b2b8a3b2b4bf97b2afb6baa7bbb2f9b4b8ba">[email&#160;protected]</a>							
											</td>
											<td>+13147858357 </td>
											<td>
												<span class="badge badge-success d-inline-flex align-items-center badge-xs">
													<i class="ti ti-point-filled me-1"></i>Active
												</span>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-store">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>	
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="text-gray-9">Urban Mart</td>
											<td>
												laurawilson
											</td>
											<td>
												<a href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cabfb8a8aba4a7abb8be8aafb2aba7baa6afe4a9a5a7">[email&#160;protected]</a>						
											</td>
											<td>+11978348626 </td>
											<td>
												<span class="badge badge-success d-inline-flex align-items-center badge-xs">
													<i class="ti ti-point-filled me-1"></i>Active
												</span>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-store">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
												
											</td>
										</tr>	
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td class="text-gray-9">Travel Mart</td>
											<td>
												robertwhite
											</td>
											<td>
												<a href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0d797f6c7b6861606c7f794d68756c607d6168236e6260">[email&#160;protected]</a>					
											</td>
											<td>+12678934561 </td>
											<td>
												<span class="badge badge-success d-inline-flex align-items-center badge-xs">
													<i class="ti ti-point-filled me-1"></i>Active
												</span>
											</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2" href="#">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-store">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
												
											</td>
										</tr>	
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /product list -->
				</div>
				<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
					<p class="mb-0">2014 - 2025 &copy; DreamsPOS. All Right Reserved</p>
					<p>Designed &amp; Developed by <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- Add Store -->
		<div class="modal fade" id="add-store">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<div class="page-title">
							<h4>Add Store</h4>
						</div>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="https://dreamspos.dreamstechnologies.com/html/template/store-list.html">
						<div class="modal-body">
							<div class="mb-3">
								<label class="form-label">Store Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="form-label">User Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="input-blocks mb-3">
								<label class="form-label">Password <span class="text-danger">*</span></label>
								<div class="pass-group">
									<input type="password" class="form-control pass-input">
									<span class="fas toggle-password fa-eye-slash"></span>
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input type="email" class="form-control">
							</div>
							<div class="mb-3">
								<label class="form-label">Phone <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-0">
								<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
									<span class="status-label ">Status</span>
									<input type="checkbox" id="user2" class="check" checked>
									<label for="user2" class="checktoggle"></label>
								</div>
							</div>							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn me-2 btn-secondary" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Store</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Store -->

		<!-- Edit Store -->
		<div class="modal fade" id="edit-store">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<div class="page-title">
							<h4>Edit Store</h4>
						</div>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="https://dreamspos.dreamstechnologies.com/html/template/store-list.html">
						<div class="modal-body">
							<div class="mb-3">
								<label class="form-label">Store Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Electro Mart">
							</div>
							<div class="mb-3">
								<label class="form-label">User Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="johnsmith">
							</div>
							<div class="input-blocks mb-3">
								<label class="form-label">Password <span class="text-danger">*</span></label>
								<div class="pass-group">
									<input type="password" class="form-control pass-input" value="********">
									<span class="fas toggle-password fa-eye-slash"></span>
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label">Email <span class="text-danger">*</span></label>
								<input type="email" class="form-control" value="electromart@example.com">
							</div>
							<div class="mb-3">
								<label class="form-label">Phone <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="+12498345785">
							</div>
							<div class="mb-0">
								<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
									<span class="status-label ">Status</span>
									<input type="checkbox" id="user1" class="check" checked>
									<label for="user1" class="checktoggle"></label>
								</div>
							</div>							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn me-2 btn-secondary" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Store -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete-modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content p-5">
					<div class="modal-body text-center p-0">
						<span class="rounded-circle d-inline-flex p-2 bg-danger-transparent mb-2"><i class="ti ti-trash fs-24 text-danger"></i></span>
						<h4 class="fs-20 text-gray-9 fw-bold mb-2 mt-1">Delete Store</h4>
						<p class="text-gray-6 mb-0 fs-16">Are you sure you want to delete store?</p>	
						<div class="d-flex justify-content-center mt-3">
							<a class="btn me-2 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none" data-bs-dismiss="modal">Cancel</a>
							<a href="store-list.html" class="btn btn-primary fs-13 fw-medium p-2 px-3">Yes Delete</a>
						</div>											
					</div>					
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->

	@endsection	