<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="saleForm.css">
  <title>Form 4</title>
</head>

<body>
  <h1>Sales Order Form</h1>
  <form action="action.php" method="post">
    <div class="top_form_section">
      <div class="personal_info">
        <fieldset>
          <legend>User Information</legend>
          <label>Serial No</label>
          <input type="number" name="serial_no">
          <label>User Name</label>
          <input type="text" name="user_name">
          <label>User Address</label>
          <input type="text" name="user_address">
          <label>User Phone Number</label>
          <input type="number" name="user_phone_number">
          <label>User Email</label>
          <input type="email" name="user_email">
        </fieldset>
      </div>
      <div>
        <div class="item_info">
          <fieldset>
            <legend>Item Information</legend>
            <div class="inner_item_info">
              <label>Item Required</label>
              <select name="item_required" id="">
                <option selected disabled>Select One</option>
                <option value="Bulb">Bulb</option>
                <option value="Holder">Holder</option>
                <option value="Wire">Wire</option>
                <option value="Bulb">Bulb</option>
              </select>
              <button class="add-button" id="addInput" onclick="addFn()">Add Input Field</button>
              <div id="inputFields"></div>
              <div class="image" name="image_preview">
                <img src="image.jpg" alt="image preview">
              </div>
              <label>Item Shape</label>
              <input type="text" name="item_shape">
            </div>
            <div class="inner_item_info">
              <label>Item Type</label>
              <input type="text" name="item_type">
              <label>Item Size</label>
              <input type="number" name="item_size">
            </div>
            <div class="inner_item_info">
              <label>Item Height</label>
              <input type="number" name="item_height">
              <label>Item Finish</label>
              <input type="text" name="item_finish">
            </div>
          </fieldset>
        </div>
        <div class="project_info">
          <fieldset>
            <legend>Project Information</legend>
            <div>
              <label>Project status</label>
              <input type="text" name="project_status">
              <label>Packed start date</label>
              <input type="date" name="packed_start_date">
            </div>
            <div>
              <label>Packed completion date</label>
              <input type="date" name="packed_completion_date">
            </div>
          </fieldset>
        </div>
      </div>
    </div>
    <div class="buttom_form_section">
      <div class="install_info">
        <fieldset>
          <legend>Install Information</legend>
          <div class="inner_install_info">
            <label>Installation is required</label>
            <input type="text" name="installation_required">
            <label>Installation Need By date</label>
            <input type="date" name="installation_need_date">
            <label>Tentative Installation </label>
            <input type="text" name="tentative_installation">
          </div>
          <div class="inner_install_info">
            <label>Installation date</label>
            <input type="date" name="installation_date">
          </div>
        </fieldset>
      </div>
      <div>
        <div class="followup_info">
          <fieldset>
            <legend>Followup Information</legend>
            <div class="inner_followup_info">
              <label>Followup</label>
              <input type="text" name="followup">
              <label>Shop drawing Start date</label>
              <input type="date" name="shop_drawing_date">
            </div>
            <div class="inner_followup_info">
              <label>Shop drawing approved</label>
              <input type="text" name="shop_drawing_approved">
              <label>Quotation shared date</label>
              <input type="text" name="quotation_shared_date">
            </div>
            <div class="inner_followup_info">
              <label>Sample approval start date</label>
              <input type="date" name="sample_approval_start_date">
              <label>Sample approval date</label>
              <input type="date" name="sample_approval_date">
            </div>
          </fieldset>
        </div>
        <div class="query_info">
          <fieldset>
            <legend>Query Information</legend>
            <div class="inner_query_info">
              <label>Query Received</label>
              <input type="text" name="query_received">
              <label>Query Start date</label>
              <input type="date" name="query_start_date">
            </div>
            <div class="inner_query_info">
              <label>Query updated date</label>
              <input type="date" name="query_update_date">
              <label>Query created by</label>
              <input type="text" name="query_created_by">
            </div>
            <div class="inner_query_info">
              <label>Query updated by</label>
              <input type="text" name="query_update_by">
              <label>Re-query</label>
              <input type="text" name="re_query">
            </div>
            <div class="inner_query_info">
              <label>Re-query closure date</label>
              <input type="text" name="re_query_closure_date">
              <label>Query end date</label>
              <input type="date" name="query_end_date">
            </div>
          </fieldset>
        </div>
        <div class="user_field">
          <fieldset>
            <legend>User Feed</legend>
            <div>
              <label>Performance Invoice</label>
              <input type="text" name="perfomance_invoice" id="">
              <label>Assemble start date</label>
              <input type="date" name="assemble_start_date" id="">
            </div>
            <div>
              <label>Assemble completion date</label>
              <input type="date" name="assemble_completion_date" id="">
              <label>Dismantle start date</label>
              <input type="date" name="dismantle_start_date" id="">
            </div>
            <div>
              <label>Dismantle completion date</label>
              <input type="date" name="dismantle_completion_date" id="">
              <label>Packed start date</label>
              <input type="date" name="packed_start_date" id="">
            </div>
            <div>
              <label>Packed completion date</label>
              <input type="date" name="packed_completion_date" id="">
              <label>Remarks</label>
              <input type="text" name="remarks" id="">
            </div>
          </fieldset>
        </div>
      </div>
    </div>
    <button>Submit Now</button>
  </form>

  <script>
    function addFn() {
      const divEle = document.getElementById("inputFields");
      const wrapper = document.createElement("div");
      const iFeild = document.createElement("input");
      iFeild.setAttribute("type", "text");
      iFeild.setAttribute("placeholder", "Enter value");
      iFeild.classList.add("input-field");
      wrapper.appendChild(iFeild);
      divEle.appendChild(wrapper);
      console.log("printed")
      // alert("Jay Hind")
    }
  </script>
</body>

</html>