<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('style.css')}}">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="{{url('icons/fontawesome/css/fontawesome-all.min.css')}}"> -->
	<link rel="stylesheet" href="{{url('icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css')}}"><!-- iconsmind.com Icons -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- llllllllll -->
	


	<title>Books</title>	
</head>
<style>

	#epubmodel{
		width:100%;
	}	

	.openbar{
		display : none;
	}
	.cross{
		display : none;
	}
	@media (max-width: 767px) {
	
		.openbar{
			display : block !important; 
		}
		.cross{
			display : block !important;
		}
        #sidebar-nav{
			background-color: white;
		}
		.cross{
			float:right;
		}
	}

		.btnDownloadPages
			{
				display : none;
			}


</style>
<body>
	<div id="sidebar-bg">

	@include('layout.header')


		<main id="col-main">

			<div class="clearfix"></div>

			<div class="dashboard-container mt-3">	
				<div class="row">
					@foreach($books as $book)
					<div class="col-4 col-md-6 col-lg-4 col-xl-4">
						<h4 class="heading-extra-margin-bottom">{{$book->bookname}}</h4>
						<input type="hidden" id="user_id" value="{{$book->user_id}}">
						<div class="item-listing-container-skrn">
						
							<div style="position:relative;" class="ebookreader" data-book="{{$book->epub_file_path}}" data-type="{{$book->type}}">
								<img class="book_coverImg" src="{{url('/image.png')}}" alt="Listing">
								<img class="book_coverImg" style="position: absolute;top: 4px;left: 3px;height: 94.4%;width: 91.7%;" src="{{url('/bookImage/'.$book->thumbnail_image)}}" alt="Listing" class="ebookreader" data-book="{{$book->epub_file_path}}" data-type="{{$book->type}}">
							</div>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align">
									<h6><p class="ebookreader" data-book="{{$book->epub_file_path}}" data-bookid="{{$book->id}}" data-type="{{$book->type}}" style="margin-right: 52px;margin-left: -17px;">{{$book->book_name}}</p></h6>
									<div class="circle-rating-pro" data-value="0.86" data-animation-start-value="0.86" data-size="32" data-thickness="3" data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }" data-empty-fill="#def6de" data-reverse="true"><span style="color:#42b740;">8.6</span></div>
								</div>
							</div>
							<?php if($book->bookreading == null)  { ?>
								<p></p>
							<?php } else { ?>
								<h6 style="color:blue; text-align:center">Continue Reading ...</h6>
							<?php } ?>
							
						</div>	
					</div>
					@endforeach		
				</div>
			</div>
		</main>


	</div>
	



	<div id="epubmodel" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" style="width:100%; max-width:100%;">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Epb File</h4>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="Closeepubmodel();">×</button>
          </div>
          <div class="modal-body container-fluid">
			<div class="row">
				<div class="col-md-10">
					<div id="area"></div>
				</div>
				<div class="col-md-2">
					<div class="justify-content-center d-flex align-items-center flex-row">
						<button type="button" class="btn btn-primary btn-sm" onclick="Prev();">Back</button>
						<button type="button" class="btn btn-secondary btn-sm" onclick="Next();">Next</button>
					</div> 
					</div>
				</div>
			</div>
		  	
    	</div>
      </div>
    </div>

	<div id="flipmodel" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" style="width:100%; max-width:100%;">
        <div class="modal-content" style="max-height: 100vh">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Fun learning with asymmetrical!!</h4>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="Closeepubmodel1();">×</button>
          </div>
          <div class="modal-body container-fluid">
			<div class="row">
				<div id="epubmodel1" style="height: 80vh;">
	
				</div>
			</div>
		  	
    	</div>
      </div>
    </div>
								
	


	<!-- Required Framework JavaScript -->
	<script src="{{url('js/libs/jquery-3.3.1.min.js')}}"></script><!-- jQuery -->
	<script src="{{url('js/libs/popper.min.js')}}" defer></script><!-- Bootstrap Popper/Extras JS -->
	<script src="{{url('js/libs/bootstrap.min.js')}}" defer></script><!-- Bootstrap Main JS -->
	<!-- All JavaScript in Footer -->

	<!-- Additional Plugins and JavaScript -->
	<script src="{{url('js/navigation.js')}}" defer></script><!-- Header Navigation JS Plugin -->
	<script src="{{url('js/jquery.flexslider-min.js')}}" defer></script><!-- FlexSlider JS Plugin -->
	<script src="{{url('js/jquery-asRange.min.js')}}" defer></script><!-- Range Slider JS Plugin -->
	<script src="{{url('js/circle-progress.min.js')}}" defer></script><!-- Circle Progress JS Plugin -->
	<script src="{{url('js/afterglow.min.js')}}" defer></script><!-- Video Player JS Plugin -->
	<script src="{{url('js/script.js')}}" defer></script><!-- Custom Document Ready JS -->
	<script src="{{url('js/script-dashboard.js')}}" defer></script><!-- Custom Document Ready for Dashboard Only JS -->
	<!-- <script src="../dist/epub.min.js"></script> -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/epubjs/dist/epub.min.js"></script>
								
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>

	<!-- <link rel="stylesheet" type="text/css" href="https://itlorist.com/book/css/flipbook.style.css">

	<script src="https://itlorist.com/book/js/flipbook.min.js"></script> -->
 
	<link rel="stylesheet" type="text/css" href="{{url('deploy/css/flipbook.style.css')}}">

	<script src="{{url('deploy/js/flipbook.min.js')}}"></script>




	<script>


		$(document).ready(function()
		{ 
			$(document).bind("contextmenu",function(e){
					return false;
			}); 
		})




		var rendition = null;
		$(document).on('click', '.ebookreader', function(){
			var epub = $(this).attr('data-book');			
			var bookid = $(this).attr('data-bookid');
			var booktype = $(this).attr('data-type');			
			var userid = $('#user_id').val();	
			
			$.ajax({
                url: "{{ url('/addbookreader') }}",
                method: 'POST',
                data: { "_token" : "{{csrf_token()}}", 'bookid': bookid, 'userid':userid},
                success: function(data){
                  console.log(data)
				}
            });
			if(booktype == 'epub'){
				var book = ePub('{{url("book")}}/'+epub, { openAs: "epub" });
				rendition = book.renderTo("area", { method: "default", width: "90vw", height: "100vh" });
				var displayed = rendition.display();
				$("#epubmodel").modal('show')
			}else{
				// window.open("{{url("book")}}/"+epub);
				var url = '{{url("book")}}/'+epub;
				
				$("#flipmodel").modal('show')

				$("#epubmodel1").flipBook({
					pdfUrl:url,
					btnPrint:{enabled:false},
					btnDownloadPages:{enabled:false},
					btnDownloadPdf:{enabled:false},
					btnShare:{enabled:false},
					
				})

			}
			
		});

		function Next(){
			rendition.next();
		}
		
		function Prev(){
			rendition.prev();
		}	

		function Closeepubmodel(){
			$("#epubmodel").modal('hide')
		}
		function Closeepubmodel1(){
			$("#flipmodel").modal('hide')
		}

	    function w3_open() {
			document.getElementById("sidebar-nav").style.display = "block";
			$('.cross').show();
		}
		
		function w3_close() {
			document.getElementById("sidebar-nav").style.display = "none";
			location.reload();
		}
	</script>								
	

</body>

</html>
