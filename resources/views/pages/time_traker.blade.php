
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add project</title>

    <script type="module" nonce="ec7cadfe0e088cb31da4efbffff5539f">
    	import {GlobalEvents} from '/js/global_events.js?version=1.3.3';
    </script>
</head>
<body>
    <div class="page">

</div><h3 class="sub-menu">Add project</h3>

<form id="project_add" name="project_add" method="post">
    <label for="title">Title *</label>
    <input id="title" type="text" name="title" placeholder="Enter title" value="" class="input-large">
    <label for="note">Note</label>
    <textarea name="note" placeholder="Add an optional project note"></textarea>
    <button id="project_submit" type="submit" name="submit" value="submit">Add</button>
    <div class="loadingspinner hidden"></div>
</form>

<div class="project_list">
    <ul>
        <li></li>
    </ul>
</div>

<div id="timer" class="timer" >
    <span id="timer_display"></span>
    <button id="timer_start" class="button-timer button-small" href="#">Start</button>
    <button id="timer_pause" class="button-timer button-small" href="#">Pause</button>
    <button id="timer_reset" class="button-timer button-small" href="#">Reset</button>
</div>



<script src="/js/timer.js?v=?version=1.3.3" nonce="ec7cadfe0e088cb31da4efbffff5539f" ></script>
<div class="flash-messages">

<script type="module" nonce="ec7cadfe0e088cb31da4efbffff5539f">
    import {
        Pebble
    } from '/js/pebble.js?v=1.3.3';

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
       
</div>

</body>
</html>