import './bootstrap';

import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons';
import { far } from '@fortawesome/free-regular-svg-icons';
import { fab } from '@fortawesome/free-brands-svg-icons';

// Add icons to the library
library.add(fas, far, fab);

// Automatically replace <i> tags with SVGs
dom.i2svg(); // dom.watch();

// Make FontAwesome globally available
window.FontAwesome = { library, dom };

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
