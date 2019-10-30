<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin:0;
      font-size: 60px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      top:30px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #1c87c9;
      }
      select {
        width: calc(100% - 12px);
        height: 35px;
        margin: 0.2px;
     }
     select:focus {
        min-width: 150px;
        width: auto;
     } 
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 250px;
      background-image: url("/uploads/media/default/0001/02/cc6bc584f236c7234947015b89151ab6d04c4cbf.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .checkbox input[type=checkbox] {
      display:inline-block;
      height:15px;
      width:15px;
      margin-right:5px;
      vertical-align:text-top;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #1c87c9;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #0692e8;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
    <form>
      <br/>
      <fieldset>
        <legend>Registration Form</legend>
        <div class="colums">
          <div class="item">
            <label for="fname">First Name<span>*</span></label>
            <input id="fname" type="text" name="fname" />
          </div>
          <div class="item">
            <label for="lname"> Last Name<span>*</span></label>
            <input id="lname" type="text" name="lname" />
          </div>
          <div class="item">
            <label for="eaddress">Email Address<span>*</span></label>
            <input id="eaddress" type="email"   name="eaddress" />
          </div>
          <div class="item">
            <label for="password">Password<span>*</span></label>
            <input id="password" type="password"   name="password" />
          </div>
          </div>
          <div class="item">
            <label for="type"> Account Type<span>*</span></label>
            <br/>
            <select>
            	<option value="Select">Select One</option>
            	<option value="tutor">Tutor</option>
            	<option value="student">Student</option>
            </select>
          </div>
          <div class = "colums">
          <div class="item">
            <label for="dobname">Date of Birth<span>*</span></label>
            <input id="dob" type="date" name="dob" />
          </div>
          <div class="item">
            <label for="gender"> Gender<span>*</span></label>
            <br/>
            <select>
            	<option value="Select">Select One</option>
            	<option value="male">Female</option>
            	<option value="female">Male</option>
            </select>
          </div>
          </div>
           <div class="item">
      		<label for="address1">Address 1 <span> * </span></label>
      		<textarea id="address1" rows="1"></textarea>
      	   </div>
          <div class="item">
            <label for="address2">Address 2</label>
      		<textarea id="address2" rows="1"></textarea>
          </div>
          <div class="colums">
          <div class="item">
            <label for="city">City <span>*</span></label>
            <input id="city" type="text"   name="city" />
          </div>
          <div class="item">
            <label for="zip">Zip/Postal Code <span>*</span></label>
            <input id="zip" type="text"   name="zip" />
          </div>
          <div class="item">
            <label for="country">Country <span>*</span></label>
            <input id="country" type="text"   name="text" />
          </div>
          <div class="item">
            <label for="phone">Phone Number <span>*</span></label>
            <input id="phone" type="tel"   name="phone"/>
          </div>
          <div class="item">
      		<label for="wage">Wage <span>*</span></label>
      		<input id="wage" type="number"  name="wage" />
          </div>
          <div class="item">
            <label for="gender"> Education Level <span>*</span></label>
            <br/>
            <select>
            	<option value="Select">Select One</option>
                <option value="highschool"> High School</option>
            	<option value="bachelors"> Bachelors</option>
            	<option value="masters"> Masters</option>
                <option value="phd"> PHD</option>
                <option value="postdoc"> Post Doc</option>
            </select>
          </div>
      </fieldset>
      <br/>
      <fieldset>
      <legend>Additional Details</legend>
      <div class="colums">
      </div>
      <div class="checkbox">
      <p>Any additional remarks?</p>
      <label><input type="checkbox"/>Yes, please consider my remarks
      </label>
      </div>
         <div class="item">
      <label for="remarks">Remarks </label>
      <textarea id="remarks" rows="1"></textarea>
      </div>
      <div class="form-group">
			<label for="photourl"> PhotoURL </label>
			<input id = "photourl" type="file" name = "photourl" />
				</div>
      </fieldset>
      <div class="btn-block">
      <button type="order" href="/">Submit</button>
      </div>
    </form>
    </div>
  </body>
</html>
