import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/plugins/common/common.min.js',
                'resources/js/custom.min.js',
                'resources/js/settings.js',
                'resources/js/gleek.js',
                'resources/js/styleSwitcher.js',
                'resources/plugins/chart.js/Chart.bundle.min.js',
                'resources/plugins/circle-progress/circle-progress.min.js',
                'resources/plugins/d3v3/index.js',
                'resources/plugins/topojson/topojson.min.js',
                'resources/plugins/datamaps/datamaps.world.min.js',
                'resources/plugins/raphael/raphael.min.js',
                'resources/plugins/morris/morris.min.js',
                'resources/plugins/moment/moment.min.js',
                'resources/plugins/pg-calendar/js/pignose.calendar.min.js',
                'resources/plugins/chartist/js/chartist.min.js',
                'resources/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
                'resources/js/dashboard/dashboard-1.js'
            ],
            refresh: true,
        }),
    ],
});
