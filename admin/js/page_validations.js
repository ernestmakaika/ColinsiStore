

    function shouldBeValidated(field) {
        return (
          !(field.getAttribute("readonly") || field.readonly) &&
          !(field.getAttribute("disabled") || field.disabled) &&
          (field.getAttribute("pattern") || field.getAttribute("required"))
        );
      }
    
        function instantValidation(field) {
        if (shouldBeValidated(field)) {
          var invalid =
            (field.getAttribute("required") && !field.value) ||
            (field.getAttribute("pattern") &&
              field.value &&
              !new RegExp(field.getAttribute("pattern")).test(field.value));
          if (!invalid && field.getAttribute("aria-invalid")) {
            field.removeAttribute("aria-invalid");
          } else if (invalid && !field.getAttribute("aria-invalid")) {
            field.setAttribute("aria-invalid", "true");
          }
        }
      }
    