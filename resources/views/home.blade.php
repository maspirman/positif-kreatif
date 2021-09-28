@extends('layouts.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Container-->
	<div class="container-xxl" id="kt_content_container">
		<!--begin::Row-->
		<div class="row g-5 g-xl-8">
			<!--begin::Col-->
			<div class="col-xxl-4">
				<!--begin::Mixed Widget 5-->
				<div class="card card-xxl-stretch">
					<!--begin::Beader-->
					<div class="card-header border-0 py-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder fs-3 mb-1">Trends</span>
							<span class="text-muted fw-bold fs-7">Latest trends</span>
						</h3>
						<div class="card-toolbar">
							<!--begin::Menu-->
							<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
											<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
											<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
											<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="menu-item px-3">
									<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
								</div>
								<!--end::Heading-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">Create Invoice</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link flex-stack px-3">Create Payment
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">Generate Bill</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
									<a href="#" class="menu-link px-3">
										<span class="menu-title">Subscription</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Plans</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Billing</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Statements</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content px-3">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
													<!--end::Input-->
													<!--end::Label-->
													<span class="form-check-label text-muted fs-6">Recuring</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-1">
									<a href="#" class="menu-link px-3">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 3-->
							<!--end::Menu-->
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body d-flex flex-column">
						<!--begin::Chart-->
						<div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="warning" style="height: 150px"></div>
						<!--end::Chart-->
						<!--begin::Items-->
						<div class="mt-5">
							<!--begin::Item-->
							<div class="d-flex flex-stack mb-5">
								<!--begin::Section-->
								<div class="d-flex align-items-center me-2">
									<!--begin::Symbol-->
									<div class="symbol symbol-50px me-3">
										<div class="symbol-label bg-light">
											<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="" />
										</div>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div>
										<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Authors</a>
										<div class="fs-7 text-muted fw-bold mt-1">Ricky Hunt, Sandra Trepp</div>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Section-->
								<!--begin::Label-->
								<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
								<!--end::Label-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-stack mb-5">
								<!--begin::Section-->
								<div class="d-flex align-items-center me-2">
									<!--begin::Symbol-->
									<div class="symbol symbol-50px me-3">
										<div class="symbol-label bg-light">
											<img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="" />
										</div>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div>
										<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Sales</a>
										<div class="fs-7 text-muted fw-bold mt-1">PitStop Emails</div>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Section-->
								<!--begin::Label-->
								<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
								<!--end::Label-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-stack">
								<!--begin::Section-->
								<div class="d-flex align-items-center me-2">
									<!--begin::Symbol-->
									<div class="symbol symbol-50px me-3">
										<div class="symbol-label bg-light">
											<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="" />
										</div>
									</div>
									<!--end::Symbol-->
									<!--begin::Title-->
									<div class="py-1">
										<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Engagement</a>
										<div class="fs-7 text-muted fw-bold mt-1">KT.com</div>
									</div>
									<!--end::Title-->
								</div>
								<!--end::Section-->
								<!--begin::Label-->
								<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
								<!--end::Label-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Items-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 5-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-xxl-8">
				<!--begin::Tables Widget 9-->
				<div class="card card-xxl-stretch mb-5 mb-xl-8">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
							<span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span>
						</h3>
						<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
							<a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
							<span class="svg-icon svg-icon-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
									<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->New Member</a>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Table-->
							<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
								<!--begin::Table head-->
								<thead>
									<tr class="fw-bolder text-muted">
										<th class="w-25px">
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
											</div>
										</th>
										<th class="min-w-150px">Authors</th>
										<th class="min-w-140px">Company</th>
										<th class="min-w-120px">Progress</th>
										<th class="min-w-100px text-end">Actions</th>
									</tr>
								</thead>
								<!--end::Table head-->
								<!--begin::Table body-->
								<tbody>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-45px me-5">
													<img src="assets/media/avatars/150-11.jpg" alt="" />
												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
													<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
												</div>
											</div>
										</td>
										<td>
											<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Intertico</a>
											<span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span>
										</td>
										<td class="text-end">
											<div class="d-flex flex-column w-100 me-2">
												<div class="d-flex flex-stack mb-2">
													<span class="text-muted me-2 fs-7 fw-bold">50%</span>
												</div>
												<div class="progress h-6px w-100">
													<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex justify-content-end flex-shrink-0">
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
															<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
															<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-45px me-5">
													<img src="assets/media/avatars/150-3.jpg" alt="" />
												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Jessie Clarcson</a>
													<span class="text-muted fw-bold text-muted d-block fs-7">C#, ASP.NET, MS SQL</span>
												</div>
											</div>
										</td>
										<td>
											<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Agoda</a>
											<span class="text-muted fw-bold text-muted d-block fs-7">Houses &amp; Hotels</span>
										</td>
										<td class="text-end">
											<div class="d-flex flex-column w-100 me-2">
												<div class="d-flex flex-stack mb-2">
													<span class="text-muted me-2 fs-7 fw-bold">70%</span>
												</div>
												<div class="progress h-6px w-100">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex justify-content-end flex-shrink-0">
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
															<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
															<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-45px me-5">
													<img src="assets/media/avatars/150-4.jpg" alt="" />
												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Lebron Wayde</a>
													<span class="text-muted fw-bold text-muted d-block fs-7">PHP, Laravel, VueJS</span>
												</div>
											</div>
										</td>
										<td>
											<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
											<span class="text-muted fw-bold text-muted d-block fs-7">Transportation</span>
										</td>
										<td class="text-end">
											<div class="d-flex flex-column w-100 me-2">
												<div class="d-flex flex-stack mb-2">
													<span class="text-muted me-2 fs-7 fw-bold">60%</span>
												</div>
												<div class="progress h-6px w-100">
													<div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex justify-content-end flex-shrink-0">
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
															<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
															<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-45px me-5">
													<img src="assets/media/avatars/150-5.jpg" alt="" />
												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Natali Goodwin</a>
													<span class="text-muted fw-bold text-muted d-block fs-7">Python, PostgreSQL, ReactJS</span>
												</div>
											</div>
										</td>
										<td>
											<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">The Hill</a>
											<span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
										</td>
										<td class="text-end">
											<div class="d-flex flex-column w-100 me-2">
												<div class="d-flex flex-stack mb-2">
													<span class="text-muted me-2 fs-7 fw-bold">50%</span>
												</div>
												<div class="progress h-6px w-100">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex justify-content-end flex-shrink-0">
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
															<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
															<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-45px me-5">
													<img src="assets/media/avatars/150-6.jpg" alt="" />
												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Kevin Leonard</a>
													<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
												</div>
											</div>
										</td>
										<td>
											<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
											<span class="text-muted fw-bold text-muted d-block fs-7">Art Director</span>
										</td>
										<td class="text-end">
											<div class="d-flex flex-column w-100 me-2">
												<div class="d-flex flex-stack mb-2">
													<span class="text-muted me-2 fs-7 fw-bold">90%</span>
												</div>
												<div class="progress h-6px w-100">
													<div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex justify-content-end flex-shrink-0">
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
															<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
															<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</div>
										</td>
									</tr>
								</tbody>
								<!--end::Table body-->
							</table>
							<!--end::Table-->
						</div>
						<!--end::Table container-->
					</div>
					<!--begin::Body-->
				</div>
				<!--end::Tables Widget 9-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
		<!--begin::Row-->
		<div class="row gy-5 g-xl-8">
			<!--begin::Col-->
			<div class="col-xl-4">
				<!--begin::List Widget 5-->
				<div class="card card-xl-stretch mb-xl-8">
					<!--begin::Header-->
					<div class="card-header align-items-center border-0 mt-4">
						<h3 class="card-title align-items-start flex-column">
							<span class="fw-bolder mb-2 text-dark">Activities</span>
							<span class="text-muted fw-bold fs-7">890,344 Sales</span>
						</h3>
						<div class="card-toolbar">
							<!--begin::Menu-->
							<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
											<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
											<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
											<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--begin::Menu 1-->
							<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6135725d18e69">
								<!--begin::Header-->
								<div class="px-7 py-5">
									<div class="fs-5 text-dark fw-bolder">Filter Options</div>
								</div>
								<!--end::Header-->
								<!--begin::Menu separator-->
								<div class="separator border-gray-200"></div>
								<!--end::Menu separator-->
								<!--begin::Form-->
								<div class="px-7 py-5">
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-bold">Status:</label>
										<!--end::Label-->
										<!--begin::Input-->
										<div>
											<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6135725d18e69" data-allow-clear="true">
												<option></option>
												<option value="1">Approved</option>
												<option value="2">Pending</option>
												<option value="2">In Process</option>
												<option value="2">Rejected</option>
											</select>
										</div>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-bold">Member Type:</label>
										<!--end::Label-->
										<!--begin::Options-->
										<div class="d-flex">
											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" value="1" />
												<span class="form-check-label">Author</span>
											</label>
											<!--end::Options-->
											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="2" checked="checked" />
												<span class="form-check-label">Customer</span>
											</label>
											<!--end::Options-->
										</div>
										<!--end::Options-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-bold">Notifications:</label>
										<!--end::Label-->
										<!--begin::Switch-->
										<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
											<label class="form-check-label">Enabled</label>
										</div>
										<!--end::Switch-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
										<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Form-->
							</div>
							<!--end::Menu 1-->
							<!--end::Menu-->
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-5">
						<!--begin::Timeline-->
						<div class="timeline-label">
							<!--begin::Item-->
							<div class="timeline-item">
								<!--begin::Label-->
								<div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-warning fs-1"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Text-->
								<div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
								<!--end::Text-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item">
								<!--begin::Label-->
								<div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-success fs-1"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Content-->
								<div class="timeline-content d-flex">
									<span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item">
								<!--begin::Label-->
								<div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-danger fs-1"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Desc-->
								<div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
								<a href="#" class="text-primary">USD 700</a>. to ESL</div>
								<!--end::Desc-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item">
								<!--begin::Label-->
								<div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-primary fs-1"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Text-->
								<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
								<!--end::Text-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item">
								<!--begin::Label-->
								<div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-danger fs-1"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Desc-->
								<div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
								<a href="#" class="text-primary">#XF-2356</a>.</div>
								<!--end::Desc-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item">
								<!--begin::Label-->
								<div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-primary fs-1"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Text-->
								<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
								<!--end::Text-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item">
								<!--begin::Label-->
								<div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-danger fs-1"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Desc-->
								<div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
								<a href="#" class="text-primary">#XF-2356</a>.</div>
								<!--end::Desc-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="timeline-item">
								<!--begin::Label-->
								<div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
								<!--end::Label-->
								<!--begin::Badge-->
								<div class="timeline-badge">
									<i class="fa fa-genderless text-success fs-1"></i>
								</div>
								<!--end::Badge-->
								<!--begin::Text-->
								<div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
								<!--end::Text-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Timeline-->
					</div>
					<!--end: Card Body-->
				</div>
				<!--end: List Widget 5-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-xl-4">
				<!--begin::Mixed Widget 12-->
				<div class="card card-xl-stretch mb-5 mb-xl-8">
					<!--begin::Header-->
					<div class="card-header border-0 bg-primary py-5">
						<h3 class="card-title fw-bolder text-white">Sales Progress</h3>
						<div class="card-toolbar">
							<!--begin::Menu-->
							<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
											<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
											<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
											<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="menu-item px-3">
									<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
								</div>
								<!--end::Heading-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">Create Invoice</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link flex-stack px-3">Create Payment
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">Generate Bill</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
									<a href="#" class="menu-link px-3">
										<span class="menu-title">Subscription</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Plans</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Billing</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Statements</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content px-3">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
													<!--end::Input-->
													<!--end::Label-->
													<span class="form-check-label text-muted fs-6">Recuring</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-1">
									<a href="#" class="menu-link px-3">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 3-->
							<!--end::Menu-->
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body p-0">
						<!--begin::Chart-->
						<div class="mixed-widget-12-chart card-rounded-bottom bg-primary" data-kt-color="primary" style="height: 225px"></div>
						<!--end::Chart-->
						<!--begin::Stats-->
						<div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
							<!--begin::Row-->
							<div class="row g-0 mb-7">
								<!--begin::Col-->
								<div class="col mx-5">
									<div class="fs-6 text-gray-400">Avarage Sale</div>
									<div class="fs-2 fw-bolder text-gray-800">$650</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col mx-5">
									<div class="fs-6 text-gray-400">Comissions</div>
									<div class="fs-2 fw-bolder text-gray-800">$29,500</div>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row g-0">
								<!--begin::Col-->
								<div class="col mx-5">
									<div class="fs-6 text-gray-400">Revenue</div>
									<div class="fs-2 fw-bolder text-gray-800">$55,000</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col mx-5">
									<div class="fs-6 text-gray-400">Expenses</div>
									<div class="fs-2 fw-bolder text-gray-800">$1,130,600</div>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Stats-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 12-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-xl-4">
				<!--begin::List Widget 4-->
				<div class="card card-xl-stretch mb-5 mb-xl-8">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder text-dark">Trends</span>
							<span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
						</h3>
						<div class="card-toolbar">
							<!--begin::Menu-->
							<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
											<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
											<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
											<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="menu-item px-3">
									<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
								</div>
								<!--end::Heading-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">Create Invoice</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link flex-stack px-3">Create Payment
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">Generate Bill</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
									<a href="#" class="menu-link px-3">
										<span class="menu-title">Subscription</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Plans</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Billing</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Statements</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content px-3">
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
													<!--end::Input-->
													<!--end::Label-->
													<span class="form-check-label text-muted fs-6">Recuring</span>
													<!--end::Label-->
												</label>
												<!--end::Switch-->
											</div>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-1">
									<a href="#" class="menu-link px-3">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 3-->
							<!--end::Menu-->
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-5">
						<!--begin::Item-->
						<div class="d-flex align-items-sm-center mb-7">
							<!--begin::Symbol-->
							<div class="symbol symbol-50px me-5">
								<span class="symbol-label">
									<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Section-->
							<div class="d-flex align-items-center flex-row-fluid flex-wrap">
								<div class="flex-grow-1 me-2">
									<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top Authors</a>
									<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
								</div>
								<span class="badge badge-light fw-bolder my-2">+82$</span>
							</div>
							<!--end::Section-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-sm-center mb-7">
							<!--begin::Symbol-->
							<div class="symbol symbol-50px me-5">
								<span class="symbol-label">
									<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Section-->
							<div class="d-flex align-items-center flex-row-fluid flex-wrap">
								<div class="flex-grow-1 me-2">
									<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular Authors</a>
									<span class="text-muted fw-bold d-block fs-7">Randy, Steve, Mike</span>
								</div>
								<span class="badge badge-light fw-bolder my-2">+280$</span>
							</div>
							<!--end::Section-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-sm-center mb-7">
							<!--begin::Symbol-->
							<div class="symbol symbol-50px me-5">
								<span class="symbol-label">
									<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Section-->
							<div class="d-flex align-items-center flex-row-fluid flex-wrap">
								<div class="flex-grow-1 me-2">
									<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New Users</a>
									<span class="text-muted fw-bold d-block fs-7">John, Pat, Jimmy</span>
								</div>
								<span class="badge badge-light fw-bolder my-2">+4500$</span>
							</div>
							<!--end::Section-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-sm-center mb-7">
							<!--begin::Symbol-->
							<div class="symbol symbol-50px me-5">
								<span class="symbol-label">
									<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Section-->
							<div class="d-flex align-items-center flex-row-fluid flex-wrap">
								<div class="flex-grow-1 me-2">
									<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active Customers</a>
									<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
								</div>
								<span class="badge badge-light fw-bolder my-2">+686$</span>
							</div>
							<!--end::Section-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-sm-center mb-7">
							<!--begin::Symbol-->
							<div class="symbol symbol-50px me-5">
								<span class="symbol-label">
									<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Section-->
							<div class="d-flex align-items-center flex-row-fluid flex-wrap">
								<div class="flex-grow-1 me-2">
									<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller Theme</a>
									<span class="text-muted fw-bold d-block fs-7">Disco, Retro, Sports</span>
								</div>
								<span class="badge badge-light fw-bolder my-2">+726$</span>
							</div>
							<!--end::Section-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-sm-center">
							<!--begin::Symbol-->
							<div class="symbol symbol-50px me-5">
								<span class="symbol-label">
									<img src="assets/media/svg/brand-logos/fox-hub.svg" class="h-50 align-self-center" alt="" />
								</span>
							</div>
							<!--end::Symbol-->
							<!--begin::Section-->
							<div class="d-flex align-items-center flex-row-fluid flex-wrap">
								<div class="flex-grow-1 me-2">
									<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Fox Broker App</a>
									<span class="text-muted fw-bold d-block fs-7">Finance, Corporate, Apps</span>
								</div>
								<span class="badge badge-light fw-bolder my-2">+145$</span>
							</div>
							<!--end::Section-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::List Widget 4-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
		<!--begin::Row-->
		<div class="row gy-0 gx-5 gx-xl-8">
			<!--begin::Col-->
			<div class="col-xl-4">
				<!--begin::Mixed Widget 9-->
				<div class="card card-xl-stretch mb-5 mb-xl-0">
					<!--begin::Body-->
					<div class="card-body d-flex flex-column pb-10 pb-lg-15">
						<div class="flex-grow-1">
							<!--begin::Info-->
							<div class="d-flex align-items-center pe-2 mb-5">
								<span class="text-muted fw-bolder fs-5 flex-grow-1">7 hours ago</span>
								<div class="symbol symbol-50px">
									<span class="symbol-label bg-light">
										<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
									</span>
								</div>
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<a href="#" class="text-dark fw-bolder text-hover-primary fs-4">PitStop - Multiple Email Generator</a>
							<!--end::Link-->
							<!--begin::Desc-->
							<p class="py-3">Pitstop creates quick email campaigns.
							<br />We help to strengthen your brand.</p>
							<!--end::Desc-->
						</div>
						<!--begin::Team-->
						<div class="d-flex align-items-center">
							<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
								<img src="assets/media/avatars/150-1.jpg" alt="" />
							</a>
							<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
								<img src="assets/media/avatars/150-4.jpg" alt="" />
							</a>
							<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
								<img src="assets/media/avatars/150-8.jpg" alt="" />
							</a>
						</div>
						<!--end::Team-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 9-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-xl-4">
				<!--begin::Mixed Widget 9-->
				<div class="card card-xl-stretch mb-5 mb-xl-0">
					<!--begin::Body-->
					<div class="card-body d-flex flex-column pb-10 pb-lg-15">
						<div class="flex-grow-1">
							<!--begin::Info-->
							<div class="d-flex align-items-center pe-2 mb-5">
								<span class="text-muted fw-bolder fs-5 flex-grow-1">10 days ago</span>
								<div class="symbol symbol-50px">
									<span class="symbol-label bg-light">
										<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
									</span>
								</div>
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<a href="#" class="text-dark fw-bolder text-hover-primary fs-4">ReactJS Admin Theme</a>
							<!--end::Link-->
							<!--begin::Desc-->
							<p class="py-3">Keenthemes uses the latest and greatest
							<br />frameworks for complete modernization.</p>
							<!--end::Desc-->
						</div>
						<!--begin::Team-->
						<div class="d-flex align-items-center">
							<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
								<img src="assets/media/avatars/150-1.jpg" alt="" />
							</a>
							<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
								<img src="assets/media/avatars/150-4.jpg" alt="" />
							</a>
							<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
								<img src="assets/media/avatars/150-8.jpg" alt="" />
							</a>
						</div>
						<!--end::Team-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 9-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-xl-4">
				<!--begin::Mixed Widget 9-->
				<div class="card card-xl-stretch mb-5 mb-xl-0">
					<!--begin::Body-->
					<div class="card-body d-flex flex-column pb-10 pb-lg-15">
						<div class="flex-grow-1">
							<!--begin::Info-->
							<div class="d-flex align-items-center pe-2 mb-5">
								<span class="text-muted fw-bolder fs-5 flex-grow-1">2 weeks ago</span>
								<div class="symbol symbol-50px">
									<span class="symbol-label bg-light">
										<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
									</span>
								</div>
							</div>
							<!--end::Info-->
							<!--begin::Link-->
							<a href="#" class="text-dark fw-bolder text-hover-primary fs-4">KT.com - High Quality Templates</a>
							<!--end::Link-->
							<!--begin::Desc-->
							<p class="py-3">Easy to use, incredibly flexible and secure
							<br />with in-depth documentation that outlines.</p>
							<!--end::Desc-->
						</div>
						<!--begin::Team-->
						<div class="d-flex align-items-center">
							<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
								<img src="assets/media/avatars/150-1.jpg" alt="" />
							</a>
							<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
								<img src="assets/media/avatars/150-4.jpg" alt="" />
							</a>
							<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
								<img src="assets/media/avatars/150-8.jpg" alt="" />
							</a>
						</div>
						<!--end::Team-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Mixed Widget 9-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
	</div>
	<!--end::Container-->
</div>
@endsection