<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--This is bootstrap-->
    <link rel="icon" type="image/x-icon" href="/shopping-cart-oche/Project/Image/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="logo.css">
</head>
<body>
<nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/shopping-cart-oche/Project/guest_user/guest/guest.php">
            <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Ecommerce
          </a>
        </div>
      </nav>
<div class="container-fluid signup_container">
    <div class="container-fluid sign_up_logo">
        Sign up
    </div>
    <form class="row g-3" id="signupForm">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationDefault01" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationDefault02" required>
        </div>
        <div class="col-md-4">
                    <label for="validationDefault06" class="form-label">Middle name</label>
                    <input type="text" class="form-control" id="validationDefault06" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault07" class="form-label">Contact No</label>
                    <input type="text" class="form-control" id="validationDefault07" required>
                </div>
                <div class="col-md-8">
                    <label for="validationDefault03" class="form-label">Block/lot</label>
                    <input type="text" class="form-control" id="validationDefault03" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault08" class="form-label">Barangay</label>
                    <select class="form-select" id="validationDefault08" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="FVR">FVR</option>
                    <option value="San Rafael 1">San Rafael 1</option>
                    <option value="San Rafael 2">San Rafael 2</option>
                    <option value="San Rafael 3">San Rafael 3</option>
                    <option value="San Rafael 4">San Rafael 5</option>
                    <option value="Kaypian">Kaypian</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault09" class="form-label">City</label>
                    <select class="form-select" id="validationDefault09" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Manila">Manila</option>
                      <option value="Quezon City">Quezon City</option>
                      <option value="Davao City">Davao City</option>
                      <option value="Cebu City">Cebu City</option>
                      <option value="Caloocan">Caloocan</option>
                      <option value="Zamboanga City">Zamboanga City</option>
                      <option value="Taguig">Taguig</option>
                      <option value="Pasig">Pasig</option>
                      <option value="Antipolo">Antipolo</option>
                      <option value="Cagayan de Oro City">Cagayan de Oro City</option>
                      <option value="Parañaque">Parañaque</option>
                      <option value="Makati">Makati</option>
                      <option value="Bacolod">Bacolod</option>
                      <option value="Pasay">Pasay</option>
                      <option value="Angeles City">Angeles City</option>
                      <option value="General Santos City">General Santos City</option>
                      <option value="Cainta">Cainta</option>
                      <option value="Marikina">Marikina</option>
                      <option value="Iloilo City">Iloilo City</option>
                      <option value="Dasmarinas">Dasmarinas</option>
                      <option value="Valenzuela">Valenzuela</option>
                      <option value="Bacoor">Bacoor</option>
                      <option value="Muntinlupa">Muntinlupa</option>
                      <option value="San Juan">San Juan</option>
                      <option value="Navotas">Navotas</option>
                      <option value="Lapu-Lapu City">Lapu-Lapu City</option>
                      <option value="Mandaluyong">Mandaluyong</option>
                      <option value="Imus">Imus</option>
                      <option value="Las Piñas">Las Piñas</option>
                      <option value="Baguio">Baguio</option>
                      <option value="Malabon">Malabon</option>
                      <option value="Santa Rosa">Santa Rosa</option>
                      <option value="Bacoor">Bacoor</option>
                      <option value="Taytay">Taytay</option>
                      <option value="Lucena">Lucena</option>
                      <option value="Lipa">Lipa</option>
                      <option value="Legazpi">Legazpi</option>
                      <option value="Ormoc">Ormoc</option>
                      <option value="Naga">Naga</option>
                      <option value="San Fernando">San Fernando</option>
                      <option value="Panabo">Panabo</option>
                      <option value="Koronadal">Koronadal</option>
                      <option value="Toledo">Toledo</option>
                      <option value="Roxas City">Roxas City</option>
                      <option value="Tabaco">Tabaco</option>
                      <option value="Gingoog">Gingoog</option>
                      <option value="Baybay">Baybay</option>
                      <option value="Sorsogon City">Sorsogon City</option>
                      <option value="Surigao City">Surigao City</option>
                      <option value="Ozamiz">Ozamiz</option>
                      <option value="Talisay">Talisay</option>
                      <option value="Bayawan">Bayawan</option>
                      <option value="Isabela">Isabela</option>
                      <option value="Bogo">Bogo</option>
                      <option value="Silay">Silay</option>
                      <option value="Guihulngan">Guihulngan</option>
                      <option value="Kabankalan">Kabankalan</option>
                      <option value="El Salvador">El Salvador</option>
                      <option value="Tuguegarao">Tuguegarao</option>
                      <option value="Dipolog">Dipolog</option>
                      <option value="Talisay">Talisay</option>
                      <option value="Tanauan">Tanauan</option>
                      <option value="Cauayan">Cauayan</option>
                      <option value="Calapan">Calapan</option>
                      <option value="Bayugan">Bayugan</option>
                      <option value="Surallah">Surallah</option>
                      <option value="Cabadbaran">Cabadbaran</option>
                      <option value="Maasin">Maasin</option>
                      <option value="Kidapawan">Kidapawan</option>
                      <option value="Bislig">Bislig</option>
                      <option value="Bais">Bais</option>
                      <option value="Cotabato City">Cotabato City</option>
                      <option value="La Carlota">La Carlota</option>
                      <option value="Bayugan">Bayugan</option>
                      <option value="San Carlos">San Carlos</option>
                      <option value="Legaspi">Legaspi</option>
                      <option value="Laoag">Laoag</option>
                      <option value="Baybay">Baybay</option>
                      <option value="Bulacan">Bulacan</option>
                      <option value="Samar">Samar</option>
                      <option value="Sorsogon">Sorsogon</option>
                      <option value="Surigao">Surigao</option>
                      <option value="Tarlac">Tarlac</option>
                      <option value="Zambales">Zambales</option>
                      <option value="Marawi">Marawi</option>
                      <option value="Catarman">Catarman</option>
                      <option value="Calbayog">Calbayog</option>
                      <option value="Pagadian">Pagadian</option>
                      <option value="Tacloban">Tacloban</option>
                      <option value="Digos">Digos</option>
                      <option value="La Trinidad">La Trinidad</option>
                      <option value="Trece Martires">Trece Martires</option>
                      <option value="Koronadal">Koronadal</option>
                      <option value="Catbalogan">Catbalogan</option>
                      <option value="Dapitan">Dapitan</option>
                      <option value="Tandag">Tandag</option>
                      <option value="Baler">Baler</option>
                      <option value="Libmanan">Libmanan</option>
                      <option value="Mati">Mati</option>
                      <option value="Bongao">Bongao</option>
                      <option value="Virac">Vir
                    <option value="Kaypian">Kaypian</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault10" class="form-label">Province</label>
                    <select class="form-select" id="validationDefault10" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Abra">Abra</option> 
                     <option value="Agusan del Norte">Agusan del Norte</option> 
                     <option value="Agusan del Sur">Agusan del Sur</option> 
                     <option value="Aklan">Aklan</option> 
                     <option value="Antique">Antique</option> 
                     <option value="Apayao">Apayao</option> 
                     <option value="Aurora">Aurora</option> 
              
                     <option value="Basilan">Basilan</option> 
                     <option value="Bataan">Bataan</option> 
                     <option value="Batanes">Batanes</option> 
                     <option value="Batangas">Batangas</option> 
                     <option value="Benguet">Benguet</option> 
                     <option value="Biliran">Biliran</option> 
                     <option value="Bohol">Bohol</option> 
                     <option value="Bukidnon">Bukidnon</option> 
                     <option value="Bulacan" > Bulacan</option> 

                     <option value="Cagayan">Cagayan</option> 
                     <option value="Camarines Norte">Camarines Norte</option> 
                     <option value="Camarines Sur"> Camarines Sur</option> 
                     <option value="Camiguin">Camiguin</option> 
                     <option value="Capiz">Capiz</option> 
                     <option value="Catanduanes">Catanduanes</option> 
                     <option value="Cavite">Cavite</option> 
                     <option value="Cebu">Cebu</option> 
                     <option value="Cotabato">Cotabato</option> 

                     <option value=">Davao de Oro">Davao de Oro</option> 
                     <option value="Davao del Norte">Davao del Norte</option> 
                     <option value="Davao del Sur">Davao del Sur</option> 
                     <option value="Davao Occidental">Davao Occidental</option> 
                     <option value="Davao Oriental">Davao Oriental</option> 
                     <option value="inagat Islands">Dinagat Islands</option> 

                     <option value="astern Samar">Eastern Samar</option> 

                     <option value="Guimaras">Guimaras</option> 

                     <option value="Ifugao">Ifugao</option> 
                     <option value="Ilocos Norte">Ilocos Norte</option> 
                     <option value="Ilocos Sur">Ilocos Sur</option> 
                     <option value="Iloilo">Iloilo</option> 
                     <option value="Isabela">Isabela </option> 

                     <option value="Kalinga">Kalinga</option> 

                     <option value="La Union"> La Union</option> 
                     <option value="Laguna">Laguna</option> 
                     <option value="Lanao del Norte">Lanao del Norte</option> 
                     <option value="Lanao del Sur">Lanao del Sur</option> 
                     <option value="Leyte">Leyte</option> 

                     <option value="Maguindana">Maguindana</option> 
                     <option value="Maguindanao del Norte">Maguindanao del Norte</option> 
                     <option value="Maguindanao del Sur">Maguindanao del Sur</option> 
                     <option value="Marinduque">Marinduque</option> 
                     <option value="Masbate">Masbate</option> 
                     <option value="Misamis Occidenta">Misamis Occidental</option> 
                     <option value="Mountain Province">Mountain Province</option> 

                     <option value="Abra">Negros Occidental</option> 
                     <option value="Abra">Negros Oriental</option> 
                     <option value="Abra">Northern Samar</option> 
                     <option value="Abra">Nueva Ecija</option> 
                     <option value="Abra">Nueva Vizcaya</option> 

                     <option value="Occidental Mindoro">Occidental Mindoro</option> 
                     <option value="Oriental Mindoro<">Oriental Mindoro</option> 

                     <option value="Palawan"> Palawan</option> 
                     <option value="Pampanga">Pampanga</option> 
                     <option value="Pangasinan">Pangasinan</option> 

                     <option value="Quezon">Quezon</option> 
                     <option value="Quirino">Quirino</option> 

                     <option value="Rizal">Rizal</option> 
                     <option value="Romblon">Romblon</option> 

                     <option value="Samar">Samar</option> 
                     <option value="Sarangani">Sarangani</option> 
                     <option value="Siquijor"> Siquijor</option> 
                     <option value="Sorsogon">Sorsogon</option> 
                     <option value="South Cotabato"> South Cotabato</option> 
                     <option value="Southern Leyte">Southern Leyte</option> 
                     <option value="Sultan Kudarat">Sultan Kudarat</option> 
                     <option value="Sulo">Sulo</option> 
                     <option value="Surigao del Norte">Surigao del Norte</option> 
                     <option value="Surigao del Sur">Surigao del Sur</option> 

                     <option value="Tarlac">Tarlac</option> 
                     <option value="Tawi-Tawi">Tawi-Tawi</option> 

                     <option value="Zambales"> Zambales</option> 
                     <option value="Zamboanga del Nort">Zamboanga del Nort</option> 
                     <option value="Zamboanga del Sur">Zamboanga del Sur</option> 
                     <option value="Zamboanga city">Zamboanga Sibugay</option> 
                    </select>
                </div>

        <div class="col-md-12">
            <label for="validationDefault11" class="form-label">Email</label>
            <input type="email" class="form-control" id="validationDefault11" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault12" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationDefault12" required>
        </div>
        <div class="col-md-6">
                    
                    <label for="validationDefault13" class="form-label">Secret Question</label>
                    <select class="form-select" id="validationDefault13" name="barangay" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Who is your first love">Who is your first love</option>
                       <option value="First pet name">First pet name</option>
                        <option value="Mother Maiden name">Mother Maiden name</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault14" class="form-label">Answer</label>
                    <input type="text" class="form-control" id="validationDefault14" required>
                </div>
        <div class="col-12">
            <div class="form-group">
                <label for="captcha">Captcha</label>
                <div class="input-group">
                    <input type="text" class="form-control captcha_input" id="captcha" required>
                    <span class="input-group-text captachaa"></span>
                </div>
            </div>
            <button type="button" class="btn btn-secondary reload-btn">Reload Captcha</button>
        </div>
        <!-- Add other form fields here -->
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Agree to terms and conditions
                </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary check-btn" type="submit">Sign up</button>
        </div>
    </form>
</div>
<!-- JavaScript for form validation -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById('signupForm');
        const captchaField = document.getElementById('captcha');
        const captchaDisplay = document.querySelector('.captachaa');
        const reloadBtn = document.querySelector('.reload-btn');

        // Function to generate captcha
        function getCaptcha() {
            const allcharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let captchaText = '';
            for (let i = 0; i < 6; i++) {
                captchaText += allcharacters.charAt(Math.floor(Math.random() * allcharacters.length));
            }
            return captchaText;
        }

        // Initial captcha generation
        captchaDisplay.textContent = getCaptcha();

        // Reload captcha
        reloadBtn.addEventListener('click', function () {
            captchaDisplay.textContent = getCaptcha();
        });

        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent default form submission

            // Perform form validation
            if (validateForm()) {
                // If form is valid, submit the form
                let firstname =document.querySelector('#validationDefault01').value;
                        let lastname =document.querySelector('#validationDefault02').value;
                        let contact =document.querySelector('#validationDefault07').value;
                        let middlename =document.querySelector('#validationDefault06').value;
                        let Block =document.querySelector('#validationDefault03').value;
                        let Barangay =document.querySelector('#validationDefault08').value;
                        let City =document.querySelector('#validationDefault09').value;
                        let Province =document.querySelector('#validationDefault10').value;
                        let Email =document.querySelector('#validationDefault11').value;
                        let Password =document.querySelector('#validationDefault12').value;
                        let Secret =document.querySelector('#validationDefault13').value;
                        let Answer =document.querySelector('#validationDefault14').value;

                let xhr = new XMLHttpRequest ();
                            xhr.onreadystatechange = function () {
                                if (this.readyState === 4 && this.status==200){
                                    let data =JSON.parse(this.responseText);

                                    if (data.success){
                                        existing_email();
                                        alert(contact);
                                        // Validate terms and conditions checkbox
                                        const termsCheckbox = document.getElementById('invalidCheck2');
                                        if (termsCheckbox.checked) {
                                            termsCheckbox = false;
                                        }
                                    }else {
                                        firstname.value = "";
                                        lastname.value = "";
                                        contact.value = "";
                                        middlename.value = "";
                                        Block.value = "";
                                        Barangay.value = "";
                                        City.value = "";
                                        Province.value = "";
                                        Email.value = "";
                                        Password.value = "";
                                        Secret.value = "";
                                        Answer.value = "";
                                        success_register();
                                    }
                                }
                            }
                            let url = "sign_up_user_info.php?firstname=" + encodeURIComponent(firstname) + "&lastname=" + encodeURIComponent(lastname) + "&middlename=" + encodeURIComponent(middlename)
                            + "&contact=" + encodeURIComponent(contact)+ "&Block=" + encodeURIComponent(Block)+ "&Barangay=" + encodeURIComponent(Barangay)+ "&City=" + encodeURIComponent(City)
                            + "&Province=" + encodeURIComponent(Province)+ "&Email=" + encodeURIComponent(Email)+ "&Password=" + encodeURIComponent(Password)+ "&Secret=" + encodeURIComponent(Secret)
                            + "&Answer=" + encodeURIComponent(Answer);
                            xhr.open("GET", url ,true)
                            xhr.send();
            }
        });

        function validateForm() {
            let isValid = true;
            
             //  Secret question
             const Secret = document.getElementById('validationDefault13');
            if (Secret.value.trim() === '') {
                isValid = false;
                alert('Please enter your Secret question');
            }

             // Validate answer
             const answer = document.getElementById('validationDefault14');
            if (answer.value.trim() === '') {
                isValid = false;
                alert('Please enter your answer');
            }

             // Validate first name
             const Province = document.getElementById('validationDefault10');
            if (Province.value.trim() === '') {
                isValid = false;
                alert('Please enter your first name');
            }

             // Validate first name
             const City = document.getElementById('validationDefault09');
            if (City.value.trim() === '') {
                isValid = false;
                alert('Please enter your first name');
            }

             // Validate first name
             const Barangay = document.getElementById('validationDefault08');
            if (Barangay.value.trim() === '') {
                isValid = false;
                alert('Please enter your first name');
            }

             // Validate first name
             const Block = document.getElementById('validationDefault03');
            if (Block.value.trim() === '') {
                isValid = false;
                alert('Please enter your first name');
            }

             // Validate first name
             const contact = document.getElementById('validationDefault07');
            if (contact.value.trim() === '') {
                isValid = false;
                alert('Please enter your first name');
            }

             // Validate first name
             const middlename = document.getElementById('validationDefault06');
            if (middlename.value.trim() === '') {
                isValid = false;
                alert('Please enter your middle name');
            }

            // Validate first name
            const firstNameInput = document.getElementById('validationDefault01');
            if (firstNameInput.value.trim() === '') {
                isValid = false;
                alert('Please enter your first name');
            }

            // Validate last name
            const lastNameInput = document.getElementById('validationDefault02');
            if (lastNameInput.value.trim() === '') {
                isValid = false;
                alert('Please enter your last name');
            }

            // Validate email
            const emailInput = document.getElementById('validationDefault11');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value)) {
                isValid = false;
                alert('Please enter a valid email address');
            }

            // Validate password
            const passwordInput = document.getElementById('validationDefault12');
            if (passwordInput.value.trim() === '') {
                isValid = false;
                alert('Please enter a password');
            }

            // Validate captcha
            if (captchaField.value.trim() !== captchaDisplay.textContent) {
                isValid = false;

                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Captcha does not match!",
                });
                // Reload captcha
                captchaDisplay.textContent = getCaptcha();
                captchaField.value = ''; // Clear input field
            }

            // Validate terms and conditions checkbox
            const termsCheckbox = document.getElementById('invalidCheck2');
            if (!termsCheckbox.checked) {
                isValid = false;
                alert('Please agree to the terms and conditions');
            }

            return isValid;
        }
    });

    function existing_email () {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "The email is already existing!",
                    });
            }
            function success_register () {
                Swal.fire({
                title: "Good job!",
                text: "Successfull register",
                icon: "success"
                });
                        let firstname =document.querySelector('#validationDefault01').value = "";
                        let lastname =document.querySelector('#validationDefault02').value = "";
                        let contact =document.querySelector('#validationDefault07').value = "";
                        let middlename =document.querySelector('#validationDefault06').value = "";
                        let Block =document.querySelector('#validationDefault03').value = "";
                        let Barangay =document.querySelector('#validationDefault08').value = "";
                        let City =document.querySelector('#validationDefault09').value = "";
                        let Province =document.querySelector('#validationDefault10').value = "";
                        let Email =document.querySelector('#validationDefault11').value = "";
                        let Password =document.querySelector('#validationDefault12').value = "";
                        let Secret =document.querySelector('#validationDefault13').value = "";
                        let Answer =document.querySelector('#validationDefault14').value = "";
                        let captchaField = document.getElementById('captcha').value = "";

            }
</script>

<!--This is for fontawesome icon-->
<script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--This is bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!--sweet  alert 2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>