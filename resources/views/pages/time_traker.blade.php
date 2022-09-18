<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add project</title>
    <meta name="description" content="Add project">
    <meta name="theme-color" content="#ffffff">
    
        <link rel="stylesheet" id="js-startup-stylesheet" href="assets/css/water/light.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" />
    <link rel="manifest" href="assets/manifest.json">

    <script type="module" nonce="38a23a60d181d19aff39970c9765a67f">
    	import {GlobalEvents} from 'assets/js/global_events.js';
    </script>
</head>
<body>
    <div class="page">

<div class="app-menu">
        <a href="/overview" data-path="/overview">Home</a>
        <a href="/project" data-path="/project">Projects</a>
        <a href="/settings" data-path="/settings">Settings</a>
        <a href="/account/signout" data-path="/account/signout">Sign out</a>
        <a id="timer_toggle" title="Toggle timer" href="#">&#128337; Timer</a>
</div>

<div id="timer" class="timer" >
    <span id="timer_display"></span>
    <button id="timer_start" class="button-timer button-small" href="#">Start</button>
    <button id="timer_pause" class="button-timer button-small" href="#">Pause</button>
    <button id="timer_reset" class="button-timer button-small" href="#">Reset</button>
</div>

<script src="assets/js/timer.js" nonce="38a23a60d181d19aff39970c9765a67f" ></script>
<div class="flash-messages">

</div><h3 class="sub-menu">Add project</h3>

<form id="project_add" name="project_add" method="post">
    <label for="title">Title *</label>
    <input id="title" type="text" name="title" placeholder="Enter title" value="" class="input-large">
    <label for="note">Note</label>
    <textarea name="note" placeholder="Add an optional project note"></textarea>
    <button id="project_submit" type="submit" name="submit" value="submit">Add</button>
    <div class="loadingspinner hidden"></div>
</form>

<script type="module" nonce="38a23a60d181d19aff39970c9765a67f">
    import {
        Pebble
    } from 'assets/js/pebble.js';

    const title = document.getElementById('title');
    title.focus();

    const return_to = Pebble.getQueryVariable('return_to');
    const spinner = document.querySelector('.loadingspinner');

    var elem = document.getElementById('project_submit');
    elem.addEventListener('click', async function(e) {
        e.preventDefault();

        spinner.classList.toggle('hidden');

        const form = document.getElementById('project_add');
        const data = new FormData(form);

        try {
            const res = await Pebble.asyncPost('/project/post', data);
            spinner.classList.toggle('hidden');
            if (res.error === false) {
                if (return_to) {
                    Pebble.redirect(return_to);
                } else {
                    Pebble.redirect(res.project_redirect);
                }
            } else {
                Pebble.setFlashMessage(res.error, 'error');
            }
        } catch (e) {
            spinner.classList.toggle('hidden');
            Pebble.asyncPostError('/error/log', e.stack)
        }
    })
</script>

</div>

<div class="footer">
    <hr />        
</div>

</body>
</html>