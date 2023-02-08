$(document).ready(function () {
  $("#submit").click(function (e) {
    e.preventDefault();

    const data = $("#form").serialize();

    const validate = validateForm(data);
    if (validate) {
      submit_form(data);
    }
    return false;
  });
});

function validateForm(data) {
  console.log(data);

  return true;
}

function submit_form(data) {
  $.ajax({
    url: "./controller/validate_register.php",
    type: "POST",
    data: data,
    success: function (response) {
      if (response == 200) {
        show_message_success();

        setTimeout(() => {
          window.location.href = "./view/home.php";
        }, 1700);

        return false;
      }
      /* console.log(response); */
      show_message_error();
      return false;
    },
    error: function (error) {
      show_message_error();

      /* console.log(error); */
      return false;
    },
  });
}

function show_message_success() {
  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 1500,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener("mouseenter", Swal.stopTimer);
      toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
  });
  Toast.fire({
    icon: "success",
    title: "Signed in successfully",
  });

  return true;
}

function show_message_error() {
  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener("mouseenter", Swal.stopTimer);
      toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
  });
  Toast.fire({
    icon: "error",
    title: "failed to register",
  });

  return true;
}
