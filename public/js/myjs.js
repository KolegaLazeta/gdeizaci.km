//login
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

//weekdays
function openDay(evt, dayName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
	tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("btn");
	for (i = 0; i < tablinks.length; i++) {
	tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(dayName).style.display = "block";
	evt.currentTarget.className += " active";
};

tinymce.init({
	selector: 'textarea',
	plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
	toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
	toolbar_mode: 'floating',
	tinycomments_mode: 'embedded',
	tinycomments_author: 'Author name',
  });

//table
$(document).ready(function (e) {
 
   
	$('#image').change(function(){
			 
	 let reader = new FileReader();
  
	 reader.onload = (e) => { 
  
	   $('#preview-image-before-upload').attr('src', e.target.result); 
	 }
  
	 reader.readAsDataURL(this.files[0]); 
	
	});
	
 });
  
 $(document).ready(function () {
   $('.mdb-select').materialSelect();
   $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
	 $(this).closest('.select-outline').find('label').toggleClass('active');
	 $(this).closest('.select-outline').find('.caret').toggleClass('active');
   });
 });
//comment collapse
$(document).ready(function(){



	$('#collapse-1').on('shown.bs.collapse', function() {
	
	$(".servicedrop").addClass('fa-chevron-up').removeClass('fa-chevron-down');
	});
	
	$('#collapse-1').on('hidden.bs.collapse', function() {
	$(".servicedrop").addClass('fa-chevron-down').removeClass('fa-chevron-up');
	});
	
	});

//table content
window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});