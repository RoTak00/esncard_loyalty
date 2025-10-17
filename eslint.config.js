// eslint.config.js
import js from '@eslint/js';
import globals from 'globals';
import tseslint from 'typescript-eslint';
import vue from 'eslint-plugin-vue';

export default [
    // ignore build/output/vendor dirs
    { ignores: ['vendor/**', 'public/**', 'storage/**', 'node_modules/**', 'bootstrap/**'] },

    // Base JS recommendations
    js.configs.recommended,

    // TypeScript recommendations (safe even if mixed JS/TS)
    ...tseslint.configs.recommended,

    // Vue 3 flat-config recommendations
    ...vue.configs['flat/recommended'],

    {
        files: ['resources/**/*.{js,ts,vue}'],
        languageOptions: {
            ecmaVersion: 'latest',
            sourceType: 'module',
            globals: { ...globals.browser, ...globals.node },
        },
        rules: {
            'no-console': 'warn',
            'no-debugger': 'warn',
        },
    },
];
