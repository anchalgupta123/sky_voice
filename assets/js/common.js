base_url = $('base').attr('href');

/*$(document).ready(function() {
    $( ".datepicker" ).datepicker({
        dateFormat : 'dd-mm-yy',
        changeMonth : true,
        changeYear : true,
        yearRange: '-100y:c+nn',
      // maxDate: '-1d'
    });
});*/

function change_img(img,preview_img) 
{
    var oFReader = new FileReader();
    oFReader.readAsDataURL($('#'+img)[0].files[0]);

    oFReader.onload = function (oFREvent) {
        $('#'+preview_img).attr('src', oFREvent.target.result);
    }
}

function login() {
	email = $('#email').val();
	password = $('#password').val();

	$.ajax({
    	url: base_url+"Login/check_login", 
    	type : "POST",
    	data: {email : email , password : password},
    	success: function(result)
    	{
            console.log(result);
            // alert(result);
    		if (result == 'Valid')
			{
				$('#otp_details').html('<h2>OTP Details</h2><input type="text" name="" id="otp" class="form-control" placeholder="Enter otp"><button type="submit" class="btn btn-default submit">Submit</button>');
                $('#email').attr('disabled',true);
                $('#password').attr('disabled',true);
                $('#btn_submit').attr('disabled',true);
			}
			else
			{
				alert('Please Enter Valid Username and Password');
			}
        }
    });
}

function re_login()
{
    email = $('#email').val();
    password = $('#password').val();
    otp = $('#otp').val();

    $.ajax({
        url: base_url+"Login/re_check_login", 
        type : "POST",
        data: {email : email , password : password,otp:otp},
        success: function(result)
        {
            if (result == 'Valid')
            {
                window.location.href = base_url + "Dashboard";
            }
            else
            {
                alert('Please Enter Valid OTP');
            }
        }
    });
}

function student_login_check() {
    user_name = $('#user_name').val();
    password = $('#password').val();

    $.ajax({
        url: base_url+"Home/check_student_login", 
        type : "POST",
        data: {user_name : user_name , password : password},
        success: function(result)
        {
            console.log(result);
            // alert(result);
            if (result == 'Valid')
            {
                window.location.href = base_url + "Home";
            }
            else
            {
                // alert('Please Enter Valid Username and Password');
                document.getElementById('error_msg').innerHtml="plese enter valid E-mail Or Password";
            }
        }
    });
}

function show_modal_update_status(id,name)
{
    $.ajax({
        url: base_url+"Users/modal_view_status", 
        type : "POST",
        data: {id : id , name :name},
        success: function(result)
        {
            $('#modal_report').html(result);
            $('#modal_report').modal('show');
        }
    });
}

function staticBox(id) {
	$('#' + id).toggle('', 'swing');
}

function search_users_by_filter()
{
    $('#preloader').show();   
    fname = $('#fname').val();
    email = $('#email').val();
    mobile = $('#mobile').val();
    gender = $('#gender').val();
    marital = $('#marital').val();
    referral = $('#referral').val();
    state = $('#state').val();
    city = $('#city').val();
    pincode = $('#pincode').val();
    last_qualification = $('#last_qualification').val();
    subject = $('#subject').val();
    specializations = $('#specializations').val();
    jobs = $('#jobs').val();
    payment = $('#payment').val();


    var formData = new FormData();
    formData.append('fname',fname);
    formData.append('email',email);
    formData.append('mobile',mobile);
    formData.append('gender',gender);
    formData.append('marital',marital);
    formData.append('referral',referral);
    formData.append('state',state);
    formData.append('city',city);
    formData.append('pincode',pincode);
    formData.append('last_qualification',last_qualification);
    formData.append('subject',subject);
    formData.append('specializations',specializations);
    formData.append('jobs',jobs);
    formData.append('payment',payment);

    $.ajax({
        url: base_url+"Users/search_user_by_filter", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            $('#table_data').html(result);
        }
    });
}

function search_free_users_by_filter()
{
    $('#preloader').show();   
    fname = $('#fname').val();
    email = $('#email').val();
    mobile = $('#mobile').val();
    gender = $('#gender').val();
    marital = $('#marital').val();
    referral = $('#referral').val();
    state = $('#state').val();
    city = $('#city').val();
    pincode = $('#pincode').val();
    last_qualification = $('#last_qualification').val();
    subject = $('#subject').val();
    specializations = $('#specializations').val();
    jobs = $('#jobs').val();
    payment = $('#payment').val();


    var formData = new FormData();
    formData.append('fname',fname);
    formData.append('email',email);
    formData.append('mobile',mobile);
    formData.append('gender',gender);
    formData.append('marital',marital);
    formData.append('referral',referral);
    formData.append('state',state);
    formData.append('city',city);
    formData.append('pincode',pincode);
    formData.append('last_qualification',last_qualification);
    formData.append('subject',subject);
    formData.append('specializations',specializations);
    formData.append('jobs',jobs);
    formData.append('payment',payment);

    $.ajax({
        url: base_url+"Users/search_free_user_by_filter", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            $('#table_data').html(result);
        }
    });
}

function change_last_qualification()
{
    $('#subject option').remove();
    last_qualification = $('#last_qualification').val();
    if (last_qualification == '12th') 
    {
        $('#subject').append('<option value="">-Select-</option><option>Maths</option><option>Biology</option><option>Commerce</option><option>Arts</option><option>Others</option>');
    }
    else if (last_qualification == 'Graduate')
    {
        $('#subject').append('<option value="">-Select-</option><option>BE/BTech</option><option>BSc</option><option>BCom</option><option>BCA</option><option>BBA</option><option>BA</option><option>Others</option>');

    }
    else if (last_qualification == 'Post Graduate')
    {
        $('#subject').append('<option value="">-Select-</option><option>ME/MTech</option><option>MSc</option><option>MCom</option><option>MCA</option><option>MBA</option><option>MA</option><option>Others</option>');
    }
    else if (last_qualification == 'Diploma')
    {
        $('#subject').append('<option value="">-Select-</option><option>ITI</option><option>Polytechnic</option><option>Paramedical</option><option>Others</option>');
    }
    else
    {
        $('#subject').append('<option value="">-Select-</option>');
    }
}

function change_last_subject()
{
    $('#specializations option').remove();
    subject = $('#subject').val();
    if (subject == 'ITI') 
    {
        $('#specializations').append('<option value="">-Select-</option><option>Computer</option><option>Civil</option><option>Mechanical</option><option>Electrician</option><option>Plumber</option><option>Surveyor</option><option>Electrical</option><option>Machine Tools</option><option>Welder</option><option>Fireman</option><option>Cookery</option><option>Paint Technology</option><option>Other</option>');
    }
    else if (subject == 'Polytechnic')
    {
        $('#specializations').append('<option value="">-Select-</option><option>Computer Science</option><option>Infomation Technology</option><option>Civil</option><option>Mechanical</option><option>Electrical</option><option>Electronics and Communication</option><option>EEE</option><option>Chemical</option><option>Bio Technology</option><option>Aeronautical</option><option>Architecture</option><option>Agriculture</option><option>Bio Medical</option><option>Marine Technology</option><option>Mining Technology</option><option>Leather Technology</option><option>Textile Technology</option><option>Petroleun Technology</option><option>Plastic Technology</option><option>Ruber Technology</option><option>Others</option>');

    }
    else if (subject == 'Paramedical')
    {
        data_specification = ['DLMT','DHFM','DOA','DOT','Health Inspector','Sanitary Inspector','Other'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'BE/BTech')
    {
        data_specification = ['Computer Science','Infomation Technology','Civil','Mechanical','Electrical','Electronics and Communication','EEE','Chemical','Industrial','Ceramic','Bio Technology','Aeronautical','Agriculture','Bio Medical','Marine','Mining','Silk & Textile','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'BSc')
    {
        data_specification = ['PCM','MEC','CBZ','CPZ','Applied Mathematics','Horticulture','Computer Science','Home Science','Bio Chemistry','Micro Biology','Bio Technology','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'BCom')
    {
        data_specification = ['Regular','Computer','Bank Management','Tex Process','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'BCom')
    {
        data_specification = ['Finance','Marketing','HR','International Businesss','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'BA')
    {
        data_specification = ['HEP','HTP','Linguistics','Economics','Psychology','Fine Arts','Political Science','Sociology','Library Science','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'ME/MTech')
    {
        data_specification = ['Computer Science','Infomation Technology','Civil','Mechanical','Electrical','Electronics and Communication','EEE','Chemical','Industrial','Ceramic','Bio Technology','Aeronautical','Agriculture','Bio Medical','Marine','Mining','Silk & Textile','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'MSc')
    {
        data_specification = ['Chemistry','Mathematics','Botany','Zoology','Physics','Home Science','Anthropology','Psychology','Bio Chemistry','Bio Technology','Micro Biology','Virology','Computers','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'MA')
    {
        data_specification = ['HEP','HTP','Linguistics','Economics','Psychology','Fine Arts','Political Science','Sociology','Library Science','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'MBA')
    {
        data_specification = ['Finance','Marketing','HR','International Businesss','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'MCom')
    {
        data_specification = ['Regular','Computer','Bank Management','Tex Process','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else
    {
        $('#specializations').append('<option value="">-Select-</option>');
    }
}


function show_user_chat(id)
{
    $.ajax({
        url: base_url+"Chat/get_user_chats", 
        type : "POST",
        data: {id :id},
        success: function(result)
        {
            $('#message_box').html(result);
            ScrollDown();
            $('#u_'+id).css("font-weight", "normal");
            $('#u_'+id).css('text-decoration', 'none');
            $('#u_'+id+ ' span').remove();
        }
    });
    $('#user_id_chat').val(id);
}

function check_user_message(id)
{
    $.ajax({
        url: base_url+"Chat/get_user_only_chating", 
        type : "POST",
        data: {id :id},
        success: function(result)
        {
            $('.msg_history').html(result);
            ScrollDown();
        }
    });
}

function ScrollDown(){
    var elmnt = document.getElementById("content");
    var h = elmnt.scrollHeight;
   $('#content').animate({scrollTop: h}, 1000);
}

function send_message_to_all()
{
    user_ids = '';
    $( ".user_ids" ).each(function( index ) {
        if ($(this).prop("checked") == true) 
        {
            user_ids = user_ids+ ','+ $(this).val();
        }
    });

    user_ids = user_ids.replace(/^,/, '');

    $('#preloader').show();   
    gender = $('#gender').val();
    marital = $('#marital').val();
    referral = $('#referral').val();
    state = $('#state').val();
    city = $('#city').val();
    pincode = $('#pincode').val();
    last_qualification = $('#last_qualification').val();
    subject = $('#subject').val();
    specializations = $('#specializations').val();
    jobs = $('#jobs').val();
    payment = $('#payment').val();
    message_for_all = $('#message_for_all').val();


    var formData = new FormData();

    formData.append('gender',gender);
    formData.append('marital',marital);
    formData.append('referral',referral);
    formData.append('state',state);
    formData.append('city',city);
    formData.append('pincode',pincode);
    formData.append('last_qualification',last_qualification);
    formData.append('subject',subject);
    formData.append('specializations',specializations);
    formData.append('jobs',jobs);
    formData.append('payment',payment);
    formData.append('message_for_all',message_for_all);
    formData.append('user_ids',user_ids);

    $.ajax({
        url: base_url+"Users/send_message_to_all", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   

            if (result) 
            {
                alert('One to many message send!');
                $('#modal_report').modal('hide');
                location.reload();
            }
            
        }
    });

}

function add_gk_question()
{
    question = $('#question').val();
    option1 = $('#option1').val();
    option2 = $('#option2').val();
    option3 = $('#option3').val();
    option4 = $('#option4').val();
    answer  = $('#answer').val();
     
    var formData = new FormData();
    formData.append('question',question);
    formData.append('option1',option1);
    formData.append('option2',option2);
    formData.append('option3',option3);
    formData.append('option4',option4);
    formData.append('answer',answer);

    $.ajax({
        url: base_url+"Category/add_gk_question", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            if (result == 'Valid') 
            {
                alert('GK Question Added successfully!');
                location.reload();
            }
        }
    });
}
function update_gk_category(){
    gk_id = $('#gk_id').val();
    question1 = $('#question1').val();
    option11 = $('#option11').val();
    option22 = $('#option22').val();
    option33 = $('#option33').val();
    option44 = $('#option44').val();
    answer1 = $('#answer1').val();

    var formData = new FormData();
    formData.append('gk_id',gk_id);
    formData.append('question1',question1);
    formData.append('option11',option11);
    formData.append('option22',option22);
    formData.append('option33',option33);
    formData.append('option44',option44);
    formData.append('answer1',answer1);

    $.ajax({
        url: base_url+"Category/update_gk_category", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            if (result == 'Valid') 
            {
               alert('GK Question Updated  successfully');
               location.reload();
            }
        }
    });
    event.preventDefault();  
}
function delete_gk_category(id)
{
    if (confirm('Are You delete This question') == true) 
    {
        $.ajax({
            url: base_url+"Category/delete_gk_category",
            type : "post",
            data : { id :id}, 
            success: function(result)
            {
                if (result == 'Valid') 
                {
                    alert('Category deleted successfully!');
                    location.reload();
                }
            }
        });
    }

}

function add_gk_hindi_question()
{
    question = $('#question').val();
    option1 = $('#option1').val();
    option2 = $('#option2').val();
    option3 = $('#option3').val();
    option4 = $('#option4').val();
    answer  = $('#answer').val();
     
    var formData = new FormData();
    formData.append('question',question);
    formData.append('option1',option1);
    formData.append('option2',option2);
    formData.append('option3',option3);
    formData.append('option4',option4);
    formData.append('answer',answer);

    $.ajax({
        url: base_url+"Category/add_gk_hindi_question", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            if (result == 'Valid') 
            {
                alert('GK Question Added successfully!');
                location.reload();
            }
        }
    });
}
function delete_gk_hindi_category(id)
{
    if (confirm('Are You delete This question') == true) 
    {
        $.ajax({
            url: base_url+"Category/delete_gk_hindi_category",
            type : "post",
            data : { id :id}, 
            success: function(result)
            {
                if (result == 'Valid') 
                {
                    alert('Category deleted successfully!');
                    location.reload();
                }
            }
        });
    }

}
function update_gk_hindi_category(){
    gk_id = $('#gk_id').val();
    question1 = $('#question1').val();
    option11 = $('#option11').val();
    option22 = $('#option22').val();
    option33 = $('#option33').val();
    option44 = $('#option44').val();
    answer1 = $('#answer1').val();

    var formData = new FormData();
    formData.append('gk_id',gk_id);
    formData.append('question1',question1);
    formData.append('option11',option11);
    formData.append('option22',option22);
    formData.append('option33',option33);
    formData.append('option44',option44);
    formData.append('answer1',answer1);

    $.ajax({
        url: base_url+"Category/update_gk_hindi_category", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            if (result == 'Valid') 
            {
               alert('GK Question In Hindi Updated  successfully');
               location.reload();
            }
        }
    });
    event.preventDefault();  
}
function add_english_question()
{
    question = $('#question').val();
    option1 = $('#option1').val();
    option2 = $('#option2').val();
    option3 = $('#option3').val();
    option4 = $('#option4').val();
    answer  = $('#answer').val();
    var formData = new FormData();
    formData.append('question',question);
    formData.append('option1',option1);
    formData.append('option2',option2);
    formData.append('option3',option3);
    formData.append('option4',option4);
    formData.append('answer',answer);

    $.ajax({
        url: base_url+"Category/add_english_question", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            if (result == 'Valid') 
            {
                alert('English Question Added successfully!');
                location.reload();
            }
        }
    });
}
function update_english_category(){
    english_id = $('#english_id').val();
    question1 = $('#question1').val();
    option11 = $('#option11').val();
    option22 = $('#option22').val();
    option33 = $('#option33').val();
    option44 = $('#option44').val();
    answer1 = $('#answer1').val();

    var formData = new FormData();
    formData.append('english_id',english_id);
    formData.append('question1',question1);
    formData.append('option11',option11);
    formData.append('option22',option22);
    formData.append('option33',option33);
    formData.append('option44',option44);
    formData.append('answer1',answer1);

    $.ajax({
        url: base_url+"Category/update_english_category", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            if (result == 'Valid') 
            {
               alert('English Language Question Updated  successfully');
               location.reload();
            }
        }
    });
    event.preventDefault();  
}
function delete_english_category(id)
{
    if (confirm('Are You delete This question') == true) 
    {
        $.ajax({
            url: base_url+"Category/delete_english_category",
            type : "post",
            data : { id :id}, 
            success: function(result)
            {
                if (result == 'Valid') 
                {
                    alert('Category deleted successfully!');
                    location.reload();
                }
            }
        });
    }

}
function add_english_hindi_question()
{
    question = $('#question').val();
    option1 = $('#option1').val();
    option2 = $('#option2').val();
    option3 = $('#option3').val();
    option4 = $('#option4').val();
    answer  = $('#answer').val();
    var formData = new FormData();
    formData.append('question',question);
    formData.append('option1',option1);
    formData.append('option2',option2);
    formData.append('option3',option3);
    formData.append('option4',option4);
    formData.append('answer',answer);

    $.ajax({
        url: base_url+"Category/add_english_hindi_question", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            if (result == 'Valid') 
            {
                alert('Hindi Language Question Added successfully!');
                location.reload();
            }
        }
    });
}
function update_english_hindi_category(){
    english_id = $('#english_id').val();
    question1 = $('#question1').val();
    option11 = $('#option11').val();
    option22 = $('#option22').val();
    option33 = $('#option33').val();
    option44 = $('#option44').val();
    answer1 = $('#answer1').val();

    var formData = new FormData();
    formData.append('english_id',english_id);
    formData.append('question1',question1);
    formData.append('option11',option11);
    formData.append('option22',option22);
    formData.append('option33',option33);
    formData.append('option44',option44);
    formData.append('answer1',answer1);

    $.ajax({
        url: base_url+"Category/update_english_hindi_category", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            if (result == 'Valid') 
            {
               alert('Hindi Language Question Updated  successfully');
               location.reload();
            }
        }
    });
    event.preventDefault();  
}
function delete_english_hindi_category(id)
{
    if (confirm('Are You delete This question') == true) 
    {
        $.ajax({
            url: base_url+"Category/delete_english_hindi_category",
            type : "post",
            data : { id :id}, 
            success: function(result)
            {
                if (result == 'Valid') 
                {
                    alert('Category deleted successfully!');
                    location.reload();
                }
            }
        });
    }

}
function add_qa_question()
{
    question = $('#question').val();
    option1 = $('#option1').val();
    option2 = $('#option2').val();
    option3 = $('#option3').val();
    option4 = $('#option4').val();
    answer  = $('#answer').val();
    var formData = new FormData();
    formData.append('question',question);
    formData.append('option1',option1);
    formData.append('option2',option2);
    formData.append('option3',option3);
    formData.append('option4',option4);
    formData.append('answer',answer);

    $.ajax({
        url: base_url+"Category/add_qa_question", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            if (result == 'Valid') 
            {
                alert('Qa Question Added successfully!');
                location.reload();
            }
        }
    });
}
function update_qa_category()
{
    qa_id = $('#qa_id').val();
    question1 = $('#question1').val();
    option11 = $('#option11').val();
    option22 = $('#option22').val();
    option33 = $('#option33').val();
    option44 = $('#option44').val();
    answer1 = $('#answer1').val();

    var formData = new FormData();
    formData.append('qa_id',qa_id);
    formData.append('question1',question1);
    formData.append('option11',option11);
    formData.append('option22',option22);
    formData.append('option33',option33);
    formData.append('option44',option44);
    formData.append('answer1',answer1);

    $.ajax({
        url: base_url+"Category/update_qa_category", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            if (result == 'Valid') 
            {
               alert('QA Question Updated  successfully');
               location.reload();
            }
        }
    });
    event.preventDefault();  
}
function delete_qa_category(id)
{
    if (confirm('Are You delete This question') == true) 
    {
        $.ajax({
            url: base_url+"Category/delete_qa_category",
            type : "post",
            data : { id :id}, 
            success: function(result)
            {
                if (result == 'Valid') 
                {
                    alert('Category deleted successfully!');
                    location.reload();
                }
            }
        });
    }

}
function add_qa_hindi_question()
{
    question = $('#question').val();
    option1 = $('#option1').val();
    option2 = $('#option2').val();
    option3 = $('#option3').val();
    option4 = $('#option4').val();
    answer  = $('#answer').val();
    var formData = new FormData();
    formData.append('question',question);
    formData.append('option1',option1);
    formData.append('option2',option2);
    formData.append('option3',option3);
    formData.append('option4',option4);
    formData.append('answer',answer);

    $.ajax({
        url: base_url+"Category/add_qa_hindi_question", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            if (result == 'Valid') 
            {
                alert('Qa Question Added successfully!');
                location.reload();
            }
        }
    });
}
function update_qa_hindi_category()
{
    qa_id = $('#qa_id').val();
    question1 = $('#question1').val();
    option11 = $('#option11').val();
    option22 = $('#option22').val();
    option33 = $('#option33').val();
    option44 = $('#option44').val();
    answer1 = $('#answer1').val();

    var formData = new FormData();
    formData.append('qa_id',qa_id);
    formData.append('question1',question1);
    formData.append('option11',option11);
    formData.append('option22',option22);
    formData.append('option33',option33);
    formData.append('option44',option44);
    formData.append('answer1',answer1);

    $.ajax({
        url: base_url+"Category/update_qa_hindi_category", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            if (result == 'Valid') 
            {
               alert('QA Question In Hindi Updated  successfully');
               location.reload();
            }
        }
    });
    event.preventDefault();  
}
function delete_qa_hindi_category(id)
{
    if (confirm('Are You delete This question') == true) 
    {
        $.ajax({
            url: base_url+"Category/delete_qa_hindi_category",
            type : "post",
            data : { id :id}, 
            success: function(result)
            {
                if (result == 'Valid') 
                {
                    alert('Category deleted successfully!');
                    location.reload();
                }
            }
        });
    }

}
function add_lr_question()
{
    question = $('#question').val();
    option1 = $('#option1').val();
    option2 = $('#option2').val();
    option3 = $('#option3').val();
    option4 = $('#option4').val();
    answer  = $('#answer').val();
    var formData = new FormData();
    formData.append('question',question);
    formData.append('option1',option1);
    formData.append('option2',option2);
    formData.append('option3',option3);
    formData.append('option4',option4);
    formData.append('answer',answer);

    $.ajax({
        url: base_url+"Category/add_lr_question", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            if (result == 'Valid') 
            {
                alert('LR Question Added successfully!');
                location.reload();
            }
        }
    });
}
function update_lr_category(){
    lr_id = $('#lr_id').val();
    question1 = $('#question1').val();
    option11 = $('#option11').val();
    option22 = $('#option22').val();
    option33 = $('#option33').val();
    option44 = $('#option44').val();
    answer1 = $('#answer1').val();

    var formData = new FormData();
    formData.append('lr_id',lr_id);
    formData.append('question1',question1);
    formData.append('option11',option11);
    formData.append('option22',option22);
    formData.append('option33',option33);
    formData.append('option44',option44);
    formData.append('answer1',answer1);

    $.ajax({
        url: base_url+"Category/update_lr_category", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            if (result == 'Valid') 
            {
               alert('LR Question Updated  successfully');
               location.reload();
            }
        }
    });
    event.preventDefault();  
}
function delete_lr_category(id)
{
    if (confirm('Are You delete This question') == true) 
    {
        $.ajax({
            url: base_url+"Category/delete_lr_category",
            type : "post",
            data : { id :id}, 
            success: function(result)
            {
                if (result == 'Valid') 
                {
                    alert('Category deleted successfully!');
                    location.reload();
                }
            }
        });
    }

}
function add_lr_hindi_question()
{
    question = $('#question').val();
    option1 = $('#option1').val();
    option2 = $('#option2').val();
    option3 = $('#option3').val();
    option4 = $('#option4').val();
    answer  = $('#answer').val();
    var formData = new FormData();
    formData.append('question',question);
    formData.append('option1',option1);
    formData.append('option2',option2);
    formData.append('option3',option3);
    formData.append('option4',option4);
    formData.append('answer',answer);

    $.ajax({
        url: base_url+"Category/add_lr_hindi_question", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            if (result == 'Valid') 
            {
                alert('LR Question Added successfully!');
                location.reload();
            }
        }
    });
}
function update_lr_hindi_category(){
    lr_id = $('#lr_id').val();
    question1 = $('#question1').val();
    option11 = $('#option11').val();
    option22 = $('#option22').val();
    option33 = $('#option33').val();
    option44 = $('#option44').val();
    answer1 = $('#answer1').val();

    var formData = new FormData();
    formData.append('lr_id',lr_id);
    formData.append('question1',question1);
    formData.append('option11',option11);
    formData.append('option22',option22);
    formData.append('option33',option33);
    formData.append('option44',option44);
    formData.append('answer1',answer1);

    $.ajax({
        url: base_url+"Category/update_lr_hindi_category", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            if (result == 'Valid') 
            {
               alert('LR Question In Hindi Updated  successfully');
               location.reload();
            }
        }
    });
    event.preventDefault();  
}
function delete_lr_hindi_category(id)
{
    if (confirm('Are You delete This question') == true) 
    {
        $.ajax({
            url: base_url+"Category/delete_lr_hindi_category",
            type : "post",
            data : { id :id}, 
            success: function(result)
            {
                if (result == 'Valid') 
                {
                    alert('Category deleted successfully!');
                    location.reload();
                }
            }
        });
    }

}
function add_technical_question()
{
    question = $('#question').val();
    option1 = $('#option1').val();
    option2 = $('#option2').val();
    option3 = $('#option3').val();
    option4 = $('#option4').val();
    answer  = $('#answer').val();
    var formData = new FormData();
    formData.append('question',question);
    formData.append('option1',option1);
    formData.append('option2',option2);
    formData.append('option3',option3);
    formData.append('option4',option4);
    formData.append('answer',answer);

    $.ajax({
        url: base_url+"Category/add_technical_question", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            if (result == 'Valid') 
            {
                alert('Technical Question Added successfully!');
                location.reload();
            }
        }
    });
}
function update_technical_category(){
    technical_id = $('#technical_id').val();
    question1 = $('#question1').val();
    option11 = $('#option11').val();
    option22 = $('#option22').val();
    option33 = $('#option33').val();
    option44 = $('#option44').val();
    answer1 = $('#answer1').val();

    var formData = new FormData();
    formData.append('technical_id',technical_id);
    formData.append('question1',question1);
    formData.append('option11',option11);
    formData.append('option22',option22);
    formData.append('option33',option33);
    formData.append('option44',option44);
    formData.append('answer1',answer1);

    $.ajax({
        url: base_url+"Category/update_technical_category", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            if (result == 'Valid') 
            {
               alert('Technical Question Updated  successfully');
               location.reload();
            }
        }
    });
    event.preventDefault();  
}
function delete_technical_category(id)
{
    if (confirm('Are You delete This question') == true) 
    {
        $.ajax({
            url: base_url+"Category/delete_technical_category",
            type : "post",
            data : { id :id}, 
            success: function(result)
            {
                if (result == 'Valid') 
                {
                    alert('Category deleted successfully!');
                    location.reload();
                }
            }
        });
    }

}
function add_technical_hindi_question()
{
    question = $('#question').val();
    option1 = $('#option1').val();
    option2 = $('#option2').val();
    option3 = $('#option3').val();
    option4 = $('#option4').val();
    answer  = $('#answer').val();
    var formData = new FormData();
    formData.append('question',question);
    formData.append('option1',option1);
    formData.append('option2',option2);
    formData.append('option3',option3);
    formData.append('option4',option4);
    formData.append('answer',answer);

    $.ajax({
        url: base_url+"Category/add_technical_hindi_question", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            if (result == 'Valid') 
            {
                alert('Technical Question Added successfully!');
                location.reload();
            }
        }
    });
}
function update_technical_hindi_category()
{
    technical_id = $('#technical_id').val();
    question1 = $('#question1').val();
    option11 = $('#option11').val();
    option22 = $('#option22').val();
    option33 = $('#option33').val();
    option44 = $('#option44').val();
    answer1 = $('#answer1').val();

    var formData = new FormData();
    formData.append('technical_id',technical_id);
    formData.append('question1',question1);
    formData.append('option11',option11);
    formData.append('option22',option22);
    formData.append('option33',option33);
    formData.append('option44',option44);
    formData.append('answer1',answer1);

    $.ajax({
        url: base_url+"Category/update_technical_hindi_category", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   
            if (result == 'Valid') 
            {
               alert('Technical Question In Hindi Updated  successfully');
               location.reload();
            }
        }
    });
    event.preventDefault();  
}
function delete_technical_hindi_category(id)
{
    if (confirm('Are You delete This question') == true) 
    {
        $.ajax({
            url: base_url+"Category/delete_technical_hindi_category",
            type : "post",
            data : { id :id}, 
            success: function(result)
            {
                if (result == 'Valid') 
                {
                    alert('Category deleted successfully!');
                    location.reload();
                }
            }
        });
    }

}




function change_state()
{
    state = $('#state').val();
    $('#city option').remove();
    $('#city').append('<option value="">Select City</option>');

    $.ajax({
        url: base_url+"Users/change_state", 
        type : "POST",
        data: {state : state},
        dataType :'json',
        success: function(result)
        {
            if (result) 
            {
                $.each(result, function (key, val) {
                    // alert(key + val);
                    $('#city').append('<option value="'+val.cityName+'">'+val.cityName+'</option>');
                });
            }
        }
    });
}
