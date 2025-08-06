<div id="kt_app_header" class="app-header">
	<div class="app-container container-fluid d-flex align-items-stretch flex-stack" id="kt_app_header_container">
		
	    <!--begin::Sidebar toggle-->
		<div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
			<div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
				<i class="ki-outline ki-abstract-14 fs-2"></i>
			</div>
			<a href="index.html">
				<img alt="Logo" src="assets/media/logos/demo42-small.svg" class="h-30px" />
			</a>
			<!--end::Logo image-->
		</div>
		<!--end::Sidebar toggle-->

		<div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
			<div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
				@include("components.extends.search") 
			</div>
		</div>
	</div>
</div>