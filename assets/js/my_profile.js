var base_url = $('#base_url').val();

$(document).ready(function(e){
    // e.preventDefault();
    $.ajax({
        type:"post",
        url: base_url + 'profile/fetch',
        dataType: 'json',

        success: function(data){

            console.log(data);

            //Basic Information

            $('#about_me').find('#last_name').val(data.last_name);
            $('#about_me').find('#first_name').val(data.first_name);
            $('#about_me').find('#middle_name').val(data.middle_name);

            $('#about_me').find('#suffix').val(data.suffix);
            $('#about_me').find('#birthdate').val(data.birthdate);
            $('#about_me').find('#country_of_birth').val(data.country_of_birth);

            $('#about_me').find('#birthplace').val(data.birthplace);
            $('#about_me').find('#nationality').val(data.nationality);
            $('#about_me').find('#civil_status').val(data.civil_status);

            $('#about_me').find('#gender').val(data.gender);
            $('#about_me').find('#religion').val(data.religion);
            $('#about_me').find('#mobile_no').val(data.mobile_no);

            $('#about_me').find('#tel_no').val(data.tel_no);
            $('#about_me').find('#email_address').val(data.email_address);

            //Address

            $('#form_address').find('#province').val(data.province);
            $('#form_address').find('#city_municipality').val(data.city_municipality);
            $('#form_address').find('#house_no_st_brgy').val(data.house_no_st_brgy);

            $('#form_address').find('#postal_code').val(data.postal_code);
            $('#form_address').find('#p_country').val(data.p_country);
            $('#form_address').find('#p_province').val(data.p_province);

            $('#form_address').find('#p_city_municipality').val(data.p_city_municipality);
            $('#form_address').find('#p_house_no_st_brgy').val(data.p_house_no_st_brgy);
            $('#form_address').find('#civil_status').val(data.civil_status);

            $('#form_address').find('#p_postal_code').val(data.p_postal_code);

            //Other Information

            $('#form_other').find('#admission_date').val(data.admission_date);
            $('#form_other').find('#entry_level').val(data.entry_level);
            $('#form_other').find('#exit_level').val(data.exit_level);
            $('#form_other').find('#student_type').val(data.student_type);

            if (data.g12_ReportCard == "true") {
                 $("#form_other").find("#g12rc").prop("checked",true);
            }

            if (data.good_moral == "true"){
                 $("#form_other").find("#cr_good_moral").prop("checked",true);
            }

            if (data.PSA == "true") {
                 $("#form_other").find("#PSA").prop("checked",true);
            }

            if (data.id_pic == "true") {
                 $("#form_other").find("#idpic").prop("checked",true);
            }
            
            if (data.form137 == "true") {
                 $("#form_other").find("#form137").prop("checked",true);
            }

            if (data.asl1 == "true") {
                  $("#form_other").find("#als1").prop("checked",true);
            }

            if (data.als2 == "true") {
                 $("#form_other").find("#als2").prop("checked",true);
            }
            
            if (data.als_diploma == "true") {
                $("#form_other").find("#als_dep").prop("checked",true);
            }

           if (data.form_138 == "true") {
                $("#form_other").find("#form138").prop("checked",true);
            }
    

        }

    })
})