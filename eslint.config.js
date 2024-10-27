import globals from 'globals';
import js from '@eslint/js';

export default [
    js.configs.recommended,
    {
        files: ['**/*.js'],
        languageOptions: {
            ecmaVersion: 12,
            sourceType: 'module',
            globals: {
                ...globals.amd,
                ...globals.browser,
                ...globals.commonjs,
                ...globals.es2021,
                '$': 'readable',
                '__dirname': 'readable',
                'Bus': 'readable',
                'TruvBridge': 'readable',
                'process': 'readable',
                'stripe': 'readable',
                'Spark': 'readable',
                'SparkForm': 'readable',
                'Vue': 'readable'
            }
        },
        rules: {
            'eol-last': ['error', 'always'],
            'indent': ['error', 4, { 'SwitchCase': 1 }],
            'no-console': ['error', { allow: ['warn', 'error'] }],
            'no-multi-spaces': ['error'],
            'quotes': ['error', 'single'],
            'semi': ['error', 'always', { 'omitLastInOneLineBlock': true }],
        }
    }
];

