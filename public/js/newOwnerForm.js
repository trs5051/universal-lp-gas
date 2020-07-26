//  kon jaygay add hobe flat form
//  koyta hobe
//  flat function call hobe ja 

function addFirstTabs() {
   let html = ` 
         <div class="col-md-11 flats-tabs-wrapper flat_info">
         <fieldset>
         <div class="flats-tabs-wrappers prev-ownders" role="tablist">
            <ul class="nav nav-tabs" id="prev_ownders_tabs">
               <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#flat-1-cowner-1" aria-selected="true" role="tab" data-toggle="tab">
                     Current Owner Info
                  </a>
               </li>
               <li class="nav-item add_new_tab_new" data-next-owner="2" data-flat="1" data-addTo="#ownersAfterId" data-addButtonTo="#prev_ownders_tabs">
                  <a class="nav-link"  data-toggle="tab" href="javascript:void(0)" title="Add Owner Tab">
                     <span class="fa fa-plus">Add</span>
                  </a>
               </li>
            </ul>

            <div id="ownersAfterId" class="subtabContent">

               <div class="id_owner_info tab-pane fade active show" id="flat-1-cowner-1" role="tabpanel">         
                  <div class="row">
                     <div class="col-md-3 offset-md-1">
                        <label>Name</label>
                        <span class="form_field_mandatory">*</span>
                     </div>
                     <div class="col-md-8 mb-2">
                        <input required="" type="text" name="name" class="form-control">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-3 offset-md-1">
                        <label>Address</label>
                        <span class="form_field_mandatory">*</span>
                     </div>
                     <div class="col-md-8 mb-2">
                        <input required="" type="text" name="address" class="form-control"> </div>
                  </div>
                  <div class="row">
                     <div class="col-md-3 offset-md-1"> <label>Phone</label><span class="form_field_mandatory">*</span>
                     </div>
                     <div class="col-md-8 mb-2">
                        <input required="" type="text" name="phone" class="form-control"> </div>
                  </div>
                  <div class="row">
                     <div class="col-md-3 offset-md-1"> <label>NID No</label><span class="form_field_mandatory">*</span>
                     </div>
                     <div class="col-md-8 mb-2"> <input required="" type="text" name="nid_no" class="form-control">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-3 offset-md-1">
                        <label>Email</label><span class="form_field_mandatory">*</span>
                     </div>
                     <div class="col-md-8 mb-2">
                        <input required="" type="text" name="email" class="form-control">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </fieldset>
         </div>
   `;
   return html;
}

$(document).on('click', '.add_new_tab_new', function () {
   let add_new_fields = $(this).attr('data-OwnersAfterId');
   let add_new_button = $(this).attr('data-addButtonTo');
   let next_owner = Number($(this).attr('data-next-owner'));
   let flat_no = Number($(this).attr('data-flat'));
   let current_owner = next_owner - 1;

   $(add_new_button).find('a.nav-link').each(function (i, v) {
      $(this).removeClass('show active').attr('aria-selected', false);
   });

   let tab_new_button = `
   <li class="nav-item">
      <a class="nav-link active show" data-toggle="tab" href="#flat-${flat_no}-cowner-${next_owner}"
      aria-selected="true" role="tab" data-toggle="tab">
         ${ordinal_suffix_of(current_owner)} Owner Info
      </a>
   </li>
   `;

   $(this).before(tab_new_button);
   $(this).attr('data-next-owner', (next_owner + 1));
   let tab_new_field = addNewTabKahini(flat_no, next_owner);
   $(add_new_fields).children('div.id_owner_info').removeClass('active show').css('display:none');
   $(`#flat-${flat_no}-cowner-${current_owner}`).removeClass('active show').after(tab_new_field);
});

$('input.id_no').parent().after(addFirstTabs());;

function addNewTabKahini(flat_no, owner_no) {
   return `
   <div class="owner_info tab-pane fade active show" id="flat-${flat_no}-cowner-${owner_no}">         
      <div class="row">
         <div class="col-md-3 offset-md-1">
            <label>Name</label>
            <span class="form_field_mandatory">*</span>
         </div>
         <div class="col-md-8 mb-2">
            <input placeholder="${ordinal_suffix_of(owner_no - 1)} Owner Name" required="" type="text" name="name" class="form-control">
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 offset-md-1">
            <label>Address</label>
            <span class="form_field_mandatory">*</span>
         </div>
         <div class="col-md-8 mb-2">
            <input required="" type="text" name="address" class="form-control"> </div>
      </div>
      <div class="row">
         <div class="col-md-3 offset-md-1"> <label>Phone</label><span class="form_field_mandatory">*</span>
         </div>
         <div class="col-md-8 mb-2">
            <input required="" type="text" name="phone" class="form-control"> </div>
      </div>
      <div class="row">
         <div class="col-md-3 offset-md-1"> <label>NID No</label><span class="form_field_mandatory">*</span>
         </div>
         <div class="col-md-8 mb-2"> <input required="" type="text" name="nid_no" class="form-control">
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 offset-md-1">
            <label>Email</label><span class="form_field_mandatory">*</span>
         </div>
         <div class="col-md-8 mb-2">
            <input required="" type="text" name="email" class="form-control">
         </div>
      </div>
   </div>`;

}

addNewTabKahini(1, 1);

function ordinal_suffix_of(i) {
   var j = i % 10,
      k = i % 100;
   if (j == 1 && k != 11) {
      return i + "st";
   }
   if (j == 2 && k != 12) {
      return i + "nd";
   }
   if (j == 3 && k != 13) {
      return i + "rd";
   }
   return i + "th";
}


/**
 * violation Yes No Kahini - optradio
 */
// $(document).on('click', "input[name='optradio']", function () {
//    if ($(this).val() == 1) {
//       $('.violation_exist').show(300);
//    } else {
//       $('.violation_exist').hide(150);
//    }
// });