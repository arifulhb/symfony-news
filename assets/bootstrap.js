// import $ from 'jquery';
// global.$ = global.jQuery = $;

import 'popper.js';
import 'bootstrap/dist/js/bootstrap';
// import 'boxicons';
// import 'isotope-layout';
// import 'glightbox/dist/js/glightbox';
// import 'aos/dist/aos';
// import './theme/js/main';
import './meganews/js/main';

import { startStimulusApp } from '@symfony/stimulus-bridge';
// Registers Stimulus controllers from controllers.json and in the controllers/ directory
export const app = startStimulusApp(require.context(
    '@symfony/stimulus-bridge/lazy-controller-loader!./controllers',
    true,
    /\.[jt]sx?$/
));

// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);
