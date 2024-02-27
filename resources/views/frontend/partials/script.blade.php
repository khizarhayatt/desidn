<script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/nav-tool.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.js-example-basic-single').select2();

            $('#doctor').on('change', function () {
                var selectedValue = $(this).val();
                console.log("Selected Value:", selectedValue);
                window.location.href = 'doctor-detail.html'
            });
        });
    </script>
    <script>
        function populateDoctors() {
            var professionSelect = document.getElementById("profession");
            var doctorSelect = document.getElementById("doctor");
            doctorSelect.innerHTML = ""; // Clear previous options

            // Define doctor options based on profession
            var profession = professionSelect.value;
            var doctors = [];
            if (profession === "cardiac surgery") {
                doctors = ["Dr. Smith", "Dr. Johnson", "Dr. Lee"];
            } else if (profession === "Cardiology") {
                doctors = ["Samir Saba", "Samir Saba"];
            } else if (profession === "Dentist") {
                doctors = ["Amir  Massiri", "Amir Massiri"];
            } else if (profession === "Electrophysiology") {
                doctors = ["Jhon Doe", 'Jhon Doe'];
            } else if (profession === "General Surgery") {
                doctors = ["Camil Sadar", "Camil Sadar"];
            } else if (profession === "Gynecology") {
                doctors = ["Delsika Seltti", "Delsika Seltti"];
            } else if (profession === "Hospice Care") {
                doctors = ["Angela Skeete", "Angela Skeete"];
            } else if (profession === "Hematology") {
                doctors = ["Mhemat Hegpur", "Berry Berman", "Archini Miani"];
            }
            // Add options to the doctor select element
            doctors.forEach(function (doctor) {
                var option = document.createElement("option");
                option.text = doctor;
                // option.setAttribute('onclick',`windows.location.href=${createSlug(text)}`)
                doctorSelect.add(option);
            });
        }

        // Populate doctors on page load
        populateDoctors();

        function createSlug(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-') // Replace spaces with -
                .replace(/[^\w\-]+/g, '') // Remove all non-word chars
                .replace(/\-\-+/g, '-') // Replace multiple - with single -
                .replace(/^-+/, '') // Trim - from start of text
                .replace(/-+$/, ''); // Trim - from end of text
        }
    </script>