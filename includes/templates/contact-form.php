<form id="inquiry_form">
    <div>
        <label>Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Email: </label>
        <input type="text" name="email">
    </div>
    <div>
        <label>Phone: </label>
        <input type="text" name="phone">
    </div>
    <div>
        <label>Your Message: </label>
        <textarea name="message"></textarea>
    </div>
    <div><button type="submit">Submit form</button></div>

</form>

<script>
    jQuery(document).ready(function($){

        $("#inquiry_form").submit(function(event){
            event.preventDefault();
            alert('Ok');
            
        });

    });
</script>