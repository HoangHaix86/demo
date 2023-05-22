<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<form id="update-form" name="contact-frm" >
        @csrf
        <input type="text" id="name" name="name">
        <input type="text" id="email" name="email">
        <input type="text" id="phone" name="phone">
        <input type="text" id="message" name="message">
        <button id="btn" type="button" >submit</button>
    </form>
    <script>
      
            $("#btn").click(function() {

            const data = {
                "user_id": "nyaRh-XSXofdD5B4Q",
                "service_id": "service_8dkaf2x",
                "template_id": "template_kpgqnlf",
                "template_params": {
                    from_name: $('#name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    message: $('#message').val(),
                }
            }
            $.ajax('https://api.emailjs.com/api/v1.0/email/send', {
                type: 'POST',
                data: JSON.stringify(data),
                contentType: 'application/json',
            }).done(function() {
              
                $('#name').val('')
                $('#email').val('')
                $('#phone').val('')
                $('#message').val('')
            })

            event.preventDefault()
            event.stopPropagation()

        })
    </script>
 
  