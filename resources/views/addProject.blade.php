<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kumar-App</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>.active, .btn:hover{
		background-color: #666;
		color: white;
		text-align: center;
	}
</style>
<body>
	<br><br>
	<div class="container" >
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<!-- <h3 class="panel-title">Ajax ToDoList <a href="" class="pull-right "data-toggle="modal" data-target="#myModal"><i class="fa fa-plus " aria-hidden="true"></i></a></h3> -->

						<h3 class="panel-title">Kumar <button id="lauchModel" type="button"class="btn pull-right btn-group" data-toggle="modal" data-target="#myModal"onclick="myFunction()">Add New</button></h3>

					</div>
					<div  class="panel-body">




					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div id="myModal"class="modal fade " tabindex="-1" role="dialog" ">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="title">Add New Project</h4>
				</div>
				<div class="modal-body ">
					<input type="hidden" id ="id">
					<input type="text" placeholder="Write Project Name here"name="" id="addProject" class="form-control">
					<br>

					<ul id="pro_name" class="list-group hideList dynamic">
						@foreach ($project as $pro )
						<li class="list-group-item ourProject  projectId"data-toggle="modal" data-target="#myModal" id="selectProject"data-dependent="buildings">{{$pro->projects}}
							<input type="hidden" id="projectId"value="{{$pro->id}}">
						</li>		
						@endforeach
					</ul>
					<div id="hideOnAddNew" style="display: none" >
						<div id="hideOnNext">
							<div  id="appendedToDiv" class="btn-group btn-group-justified" role="group" aria-label="...">

	        	<!-- <div class="btn-group" role="group">
	        	  <button type="button" class="btn btn-default">B</button>
	        	</div>
	        	<div class="btn-group" role="group">
	        	  <button type="button" class="btn btn-default">C</button>
	        	</div> -->

	        </div>
	        <br>

	        <div id="appendForFlatType" class="btn-group btn-group-justified" role="group" aria-label="...">

	          <!-- <div class="btn-group" role="group">
	            <button type="button" class="btn btn-default" id="2BHKButton" value="2BHKButton">2 BHK</button>
	          </div>
	          <div class="btn-group" role="group">
	            <button type="button" class="btn btn-default"id="3BHKButton" value="3BHKButton">3 BHK</button>
	        </div> -->
	    </div>
	    <br>
	    <div  id ="appendVToDiv" class="btn-group btn-group-justified">
	    	<div id="appendGVToDiv" class="btn-group" role="group"><button type="button"class="btn btn-default"id="GVB" onclick="GVNGV(1)">GV</button></div><div id="appendNGVToDiv" class="btn-group" role="group"> <button type="button" class="btn btn-default"id="NGVB" data-fetch="0" onclick="GVNGV(0)">NGV</button></div>
	    </div>     

	</div>

	<br>
	<div class="row ckbx">
		<div id="appendForFlatNo"class="col-lg-12">


		</div>
	</div>

	


</div>

<div >
	<div id="submitId" style="display: none">

		<form id="addform" method="post">
			@csrf
		  <div class="form-group">
		    
		    <input type="text" class="form-control" name="Name" id="Name"  placeholder="Name"><br>
		   
		   <input type="email" class="form-control" name="email" id="email"  placeholder="Email"><br>
		   
		   <input type="mobile" class="form-control" name="Mobile" id="Mobile" placeholder="Mobile"><br>
		  
		   <input type="text" class="form-control" name="Address" id="Address"  placeholder="Address"><br>
		   
		   <input type="text" class="form-control" name="City" id="City"  placeholder="City"><br>
		   
		   <input type="text" class="form-control" name="State" id="State" placeholder="State"><br>

			<button type="submit" id="submitBtn" class="btn btn-primary pull-right">Submit</button>

		  </div>
		</form>
	
	</div>
</div>





</div>
<div class="modal-footer">
	<button type="button" class="btn btn-warning"style="display: none;" id="delete">Delete</button>
	<button type="button" class="btn btn-primary"style="display: none"; id="saveChanges">Save changes</button>
	<button type="button" class="btn btn-primary" id="AddButton">Add </button>
	<button type="button" class="btn btn-primary NextSelectPro" id="next">Next </button>
	<button type="button" class="btn btn-primary NextSelectPro " id="next2">next</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@csrf
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>
	$(document).ready(function(){
		$(document).on('click','.ourProject',function(){

			var text=$(this).text();
			var id=$(this).find('#projectId').val();
					// alert(id);
					$('#hideOnAddNew').show(400);
					$('.btn-group').hide(400);
					$('.ckbx').hide(400);
					$('#title').text('Edit Project name Or Continue to select flat')
					$('#addProject').val(text);
					$('#delete').show(400);
					$('#saveChanges').show(400);
					$('#AddButton').hide(400);
					$('#next2').hide(400);
					$('#submitId').hide(400);
					$('#id').val(id);
					console.log(id);
					console.log(text);
				})
	})


	$(document).on('click','.addProject',function(){
		$('#hideOnAddNew').hide(400);
		$('.btn-group').hide(400);
		$('.ckbx').hide(400);
		$('#title').text('Add Project name')
		$('#addProject').val("");
		$('#delete').hide(400);
		$('#saveChanges').hide(400);
		$('#AddButton').show(400);
		$('#next2').hide(400);
		$('#submitId').hide(400);

	})

	function myFunction() {
		var x = document.getElementById("hideOnAddNew");
		if (v.style.display === "none") {
			v.style.display = "block";
		} else {
			v.style.display = "none";
		}
	}


	$(document).on('classlick','#selectProject',function(){

		$('#title').text('Selected Project name')
		$('#addProject').val("");
		$('#delete').hide(400);
		$('#saveChanges').hide(400);
		$('#AddButton').hide(400);
		$('#next').show(400);
		$('.btn-group').hide(400);
		$('.ckbx').hide(400);
		$('#submitId').hide(400);
	})

	$(document).on('click','#next',function(){

		$("#hideOnAddNew").css("display","block");
		$('#title').text('Select Flat')
		$('#addProject').val("");
		$('#addProject').hide(400);
		$('#delete').hide(400);
		$('#saveChanges').hide(400);
		$('#AddButton').hide(400);
		$('.hideList').hide(400);
		$('#next').hide(400);
		$('#next2').show(400);
		$('.btn-group').show(400);
		$('.ckbx').show(400);
		$('#hideOnNext').show(400);
		$('#submitId').hide(400);
	})


	$(document).on('click','#next2',function(){

		$("#hideOnAddNew").css("display","none");
		$("#submitId").css("display","block");
		$('#title').text('Booking details');
		$('#addProject').val("");
		$('#addProject').hide(400);
		$('#delete').hide(400);
		$('#saveChanges').hide(400);
		$('#AddButton').hide(400);
		$('.hideList').hide(400);
		$('#next').hide(400);
		$('#next2').hide(400);
		$('.btn-group').hide(400);
		$('.ckbx').hide(400);
		$('#hideOnNext').hide(400);
		$('#submitId').show(400);
		$('#submitBtn').show(400);	
	})




	$('#AddButton').click(function(){
		var text = $('#addProject').val();
		$.post('addProject',{'text':text,'_token':$('input[name=_token]').val()},function(data){
			console.log(data);
			$('#pro_name').load(location.href + ' #pro_name');
		})
		$('.btn-group').hide(400);
		$('.ckbx').hide(400);
		$('#submitId').hide(400);

	})


	$('#delete').click(function(){
		var id =$('#id').val();
		$.post('delete',{'id':id,'_token':$('input[name=_token]').val()},function(data){
			console.log(data);
			$('#pro_name').load(location.href + ' #pro_name');
		})
	})


			// $(document).ready(function () {
			//     $('#myModal').modal({
			//            backdrop: 'static',
			//            keyboard: false
			//     })
			//    });

			$('#myModal').on('hide.bs.modal', function (e) {
				e.preventDefault();
				e.stopPropagation();
				return false;
			});
			

			$('.NextSelectPro').click(function()
			{
				// var Id=$('#projectId').val();
				var id =$('#id').val();
				// alert(Id);
				console.log(id);				
				$.ajax({
					type:'GET',
					url:'getBuild',
					data:{id:id},	
					dataType: 'json',
					success:function(data){
							// alert('hi form success');
							// console.log(data);

							$('#appendedToDiv').empty();
							$.each(data,function(key,value){
											// console.log(value.building_name);
											$('#appendedToDiv').append('<div id="test" class="btn-group "role="group"><button type="button" onclick="getBuildId('+value.id+')" class="btn btn-default selected"id="Abbutton">'+value.building_name+'</button></div>');

										})

						}	
					})
			})

			function getBuildId(id) 
			{ 
				 // alert(id);
				 // console.log(id);
				 $.ajax({
				 	type:'GET',
				 	url:'getFlatType',
				 	data:{id:id},	
				 	dataType: 'json',
				 	success:function(data)
				 	{				
											// alert('hi form success');
											// console.log(data);								
											$('#appendForFlatType').empty();
											$.each(data,function(key,value){
									// console.log(value.flat_type);
									$('#appendForFlatType').append('<div class="btn-group" role="group"><input type="hidden"id="flatAll"value="'+value.flat_id+'"><button type="button" onclick="getFlatNo('+value.flat_id+');" class="btn btn-default">'+value.flat_type+'</button></div>');
									
								})

										}	
									})

				}


				function getFlatNo(id) 
				{ 
				 // alert(id);
				 // console.log(id);
				 $.ajax({
				 	type:'GET',
				 	url:'getFlatNo',
				 	data:{id:id},	
				 	dataType: 'json',
				 	success:function(data)
				 	{				
									// alert('hi form success');
									// console.log(data);										
									$('#appendForFlatNo').empty();
									$.each(data,function(key,value){

									// console.log(value.flat_type);
									$('#appendForFlatNo').append('<form><label class="checkbox-inline"><input type="checkbox" class="chkbxq" name="disable" value="'+value.status+'" id="ck1" data-text="'+value.status+'" disabled>'+value.flat_no+'  </label></form>');
								})

								}	
							})

				}

			// $(document).on('click','button',function(e){
			// 	$(this).addClass('active').siblings().removeClass('active');
			// });	

			$('button').click(function(event) {
				event.preventDefault();
				$(this).addClass('active').siblings().removeClass('active');
			});

			// function chk_control(val)
			// {
			// 		// alert(str);			
			// 		var status = $('#GVB').data('status');
			// 		// alert(status);
			// 		if(val=='status')
			// 		{
			// 			alert('checked');
			// 			var value = $('.chkbxq').data('text');

			// 	 		 $(".chkbxq").attr('disabled', !$(".chkbxq").attr('disabled'));
			// 			// alert(value);

			// 		}

			// 		else 
			// 			{
			// 				var status = $('#GVB').data('status');
			// 				$(".chkbxq").attr('disabled', !$(".chkbxq").attr('disabled'));
			// 				document.getElementById('ck1').disabled=true;}
			// }	

			function GVNGV(int)
			{
				// var flstatus = $('#appendForFlatNo .chkbxq');
				// alert(flstatus);
				$('#appendForFlatNo .chkbxq').each(function(){

					if ($('#appendForFlatNo .chkbxq[value='+int+']').is(':disabled')) {
						$('#appendForFlatNo .chkbxq[value='+int+']').removeAttr('disabled');
					} else {
						$('#appendForFlatNo .chkbxq').attr('disabled', 'disabled');
					}
				});
			}

			// $(document).ready(function (e) {
			// 	e.preventDefault();
			//   $("form").change(function(event){
			//           event.preventDefault();
			//     var formData = {
			//       name: $("#Name").val(),
			//       email: $("#email").val(),
			//       Mobile:$('#Mobile').val(),
			//       Address:$('#Address').val();
			//       City:$('#City').val();
			//       State:$('#State').val();

			//       var formData= $(this).serialize();
			//     };

			//     $.ajax({
			//       type: "POST",
			//       url: "submit",
			//       data: {'formData'::formData,'_token''_token':$('input[name=_token]').val()},
			//       dataType: "json",
			//       // encode: true,

			//     })
			    
			//   });
			// });


		

		</script>

		
		<script  type="text/javascript">
		  $(document).ready(function(){

		    $('#addform').on('submit',function(e){
		     e.preventDefault();
		    	 // alert("Submitted");
		        // var flatid=$('#flatAll').text();
		        var text=$(this).text();
		        alert(text);


		      $.ajax({
		        method:"POST",
		        url:"addProject",
		        data:$('#addform').serialize(),
		        dataType:'json'
		        success:function(response){
		        	// alert("Submitted success");
		          console.log(response)
		         
		          alert("Data Saved");
		        },
		        error:function(error){
		         console.log(error)
		         alert("Data Not Saved");
		       }
		     });  
		    });
		});
	


		</script>



	</body>
	</html>