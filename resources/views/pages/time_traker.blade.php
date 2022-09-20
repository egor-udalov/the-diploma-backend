@extends('layouts.default')

@section('head')

    <title>Add project</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Add project">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" id="js-startup-stylesheet" href="assets/css/water/light.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="manifest" href="assets/manifest.json">

    <script type="module" nonce="38a23a60d181d19aff39970c9765a67f">
        import {
            GlobalEvents
        } from 'assets/js/global_events.js';
    </script>

@endsection('head')

@section('content')
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

    <script src="assets/js/timer.js" nonce="38a23a60d181d19aff39970c9765a67f"></script>
    <div class="flash-messages">

    </div>
    <h3 class="sub-menu">Add project</h3>

    <form id="project_add" name="project_add" method="get">
        @csrf
        <label for="title">Title *</label>
        <input id="title" type="text" name="project_name" placeholder="Enter title" value="" class="input-large">
        <button id="project_submit" type="submit" name="submit" value="submit">Add</button>
        <div class="loadingspinner hidden"></div>
    </form>

    <h3 class="sub-menu">Projects</h3>

    <table>
        <thead>
            <tr>
                <td>
                    <p>
                        Title ↓
                    </p>
                </td>
                <td>
                    <p>
                        Updated ↓
                    </p>
                </td>
                <td class="xs-hide">
                    <p>Time used</p>
                </td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="td-overflow"><a title="" href='#'>Спортзал</a></td>
                <td>19/09/2022</td>
                <td class="xs-hide">00:00</td>
                <td>
                    <div class="action-links">
                        <a href="/add_time" title="Add new task to project"><i class="fa-solid fa-plus"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="td-overflow"><a title="123" href='#'>Задача №2</a></td>
                <td>17/09/2022</td>
                <td class="xs-hide">20:00</td>
                <td>
                    <div class="action-links">
                        <a href="/task/add/102" title="Add new task to project"><i class="fa-solid fa-plus"></i></a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>


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

@endsection('content')