<!-- SEARCH BAR -->
	<form class="navbar-form navbar-right nav-form-bottom hidden-sm" role="search" method="get" action="' . home_url( '/' ) . '">
		<div class="input-group form-mg-l-r">
			<input type="text" class="form-control"  value="' . get_search_query() . '" name="s" id="s" />
    		<div class="input-group-btn">
        		<button class="btn btn-blue" type="submit"><i class="glyphicon glyphicon-search gly-white"></i></button>
    		</div>
		</div>
	</form>
<!-- SEARCH BAR -->