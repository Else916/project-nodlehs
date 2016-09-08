<div class="col-sm-9 col-md-9" style="width:80%;">
	<h3 class="title"><span>KG Graduation 2015</span></h3>
	<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
	<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
	    <!-- The container for the modal slides -->
	    <div class="slides"></div>
	    <!-- Controls for the borderless lightbox -->
	    <h3 class="title"></h3>
	    <a class="prev">‹</a>
	    <a class="next">›</a>
	    <a class="close">×</a>
	    <a class="play-pause"></a>
	    <!-- <ol class="indicator"></ol> -->
	    <!-- The modal dialog, which will be used to wrap the lightbox content -->
	    <div class="modal fade">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" aria-hidden="true">&times;</button>
	                    <h4 class="modal-title"></h4>
	                </div>
	                <div class="modal-body next"></div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default pull-left prev">
	                        <i class="glyphicon glyphicon-chevron-left"></i>
	                        Previous
	                    </button>
	                    <button type="button" class="btn btn-primary next">
	                        Next
	                        <i class="glyphicon glyphicon-chevron-right"></i>
	                    </button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div id="links">
	<?php 
	//http://abu-dhabi.dhafraschools.com/img/gallery/national_day_2014/thumbnail/i%20(99).jpg
	//<a href="images/apple.jpg" title="Apple" data-gallery>
    //     <img src="images/thumbnails/apple.jpg" alt="Apple">
    //</a>
		foreach($galleryImgDir as $value) {
			if($value != '.' && $value != '..')
			{
				echo "<a href='" . $public_folder . "img/gallery/" . $curPage . "/" . str_replace(' ','%20', $value) . "' data-gallery>";
				echo "<div class='imgContainer'>";
				echo "<img src='" . $public_folder . "img/gallery/" . $curPage . "/thumbnail/" . str_replace(' ','%20', $value) . "'>";
				echo "</div>";
				echo "</a>";
			}
		}
	?>
	</div>
</div>