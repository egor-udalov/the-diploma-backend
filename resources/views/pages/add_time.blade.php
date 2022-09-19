<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PPM</title>
    <meta name="description" content="PPM">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" id="js-startup-stylesheet" href="assets/css/water/light.min.css?version=1.3.3">

    <link rel="stylesheet" href="assets/css/default.css?version=1.3.3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1assets/css/all.min.css?version=1.3.3" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="manifest" href="/assets/manifest.json?version=1.3.3">

    <script type="module" nonce="5c79a186b820cc3667f7a1bdb7d2a539">
        import {
            GlobalEvents
        } from 'assets/js/global_events.js?version=1.3.3';
    </script>
</head>

<body>
    <div class="page">

        <div class="app-menu">
            <button id="timer_toggle" title="Toggle timer">&#128337; Timer</button>
        </div>

        <div id="timer" class="timer">
            <span id="timer_display"></span>
            <button id="timer_start" class="button-timer button-small">Start</button>
            <button id="timer_pause" class="button-timer button-small">Pause</button>
            <button id="timer_reset" class="button-timer button-small">Reset</button>
        </div>

        <script src="assets/js/timer.js?v=?version=1.3.3" nonce="5c79a186b820cc3667f7a1bdb7d2a539"></script>
        <div class="flash-messages">

        </div>
        <div class="flash-messages">

        </div>
        <h3>Add time: 123</h3>

        <p>Project: <a href="/project/view/104">123</a></p>

        <form id="time_add" name="time_add" method="post">
            <label for="minutes">Time used. Valid time input (hh:mm), e.g. 1:10 or 0:15 *</label>
            <input id="minutes" type="text" name="minutes" placeholder="Time used" value="">

            <label for="begin_data">Date</label>
            <input id="begin_date" type="date" name="begin_date" placeholder="Pick date" value="2022-09-19">

            <input id="task_id" type="hidden" name="task_id" value="616">

            <button id="time_add_submit" type="submit" name="submit" value="submit">Submit</button>
            <button id="time_add_submit_and_stay" type="submit" name="submit" value="submit">Submit and stay</button>
            <button id="time_add_submit_and_close" type="submit" name="submit" value="submit">Submit and close task</button>
            <div class="loadingspinner hidden"></div>

        </form>



        <script type="module" nonce="5c79a186b820cc3667f7a1bdb7d2a539">
            import {
                Pebble
            } from 'assets/js/pebble.js?v=1.3.3';

            const minutes = document.getElementById('minutes');
            minutes.focus();

            const spinner = document.querySelector('.loadingspinner');

            document.addEventListener('click', async function(event) {

                if (event.target.matches('#time_add_submit') || event.target.matches('#time_add_submit_and_stay') || event.target.matches('#time_add_submit_and_close')) {

                    event.preventDefault();

                    if (event.target.matches('#time_add_submit_and_close')) {
                        if (!confirm('Complete this task?')) {
                            return;
                        }
                    }

                    spinner.classList.toggle('hidden');

                    const form = document.getElementById('time_add');
                    const data = new FormData(form);
                    const return_to = Pebble.getQueryVariable('return_to');

                    if (event.target.matches('#time_add_submit_and_close')) {
                        data.append('close', 'true');
                    }

                    try {
                        const res = await Pebble.asyncPost('/time/post', data);
                        if (res.error === false) {
                            if (event.target.matches('#time_add_submit_and_stay')) {
                                location.reload();
                                return;
                            }
                            if (return_to) {
                                Pebble.redirect(return_to);
                            } else {
                                Pebble.redirect(res.project_redirect);
                            }
                        } else {
                            Pebble.setFlashMessage(res.error, 'error');
                        }
                    } catch (e) {
                        Pebble.asyncPostError('/error/log', e.stack)
                    } finally {
                        spinner.classList.toggle('hidden');
                    }


                }

                if (event.target.matches('.time_delete')) {

                    event.preventDefault();

                    const item = event.target;
                    const data = new FormData();
                    const id = item.getAttribute('data-id')
                    const return_to = Pebble.getQueryVariable('return_to');
                    const confirm_res = confirm('Are you sure you want to delete time entry?');

                    if (confirm_res) {

                        spinner.classList.toggle('hidden');
                        try {
                            const res = await Pebble.asyncPost('/time/delete/' + id, data);

                            if (res.error === false) {
                                location.reload();

                            } else {
                                Pebble.setFlashMessage(res.error, 'error');
                            }

                        } catch (e) {
                            Pebble.asyncPostError('/error/log', e.stack)
                        } finally {
                            spinner.classList.toggle('hidden');
                        }

                    }
                }
            });
        </script>

    </div>

    <div class="footer">
        <hr />
    </div>

</body>

</html>