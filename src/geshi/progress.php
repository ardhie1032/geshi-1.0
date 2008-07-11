<?php
/*************************************************************************************
 * progress.php
 * --------
 * Author: Marco Aurelio de Pasqual (marcop@hdi.com.br)
 * Copyright: (c) 2008 Marco Aurelio de Pasqual, Benny Baumann (http://qbnz.com/highlighter)
 * Release Version: 1.0.8
 * Date Started: 2008/07/11
 *
 * Progress language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/07/11 (1.0.8)
 *   -  First Release
 *
 * TODO (updated 2008/07/11)
 * -------------------------
 * * Clean up the keyword list
 * * Sort Keyword lists by Control Structures, Predefined functions and other important keywords
 * * Complete language support
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array(
    'LANG_NAME' => 'Progress',
	'COMMENT_SINGLE' => array(),
	'COMMENT_MULTI' => array('/*' => '*/'),
	'CASE_KEYWORDS' => GESHI_CAPS_UPPER,
	'QUOTEMARKS' => array("'", '"'),
	'ESCAPE_CHAR' => '',
	'KEYWORDS' => array (
		/* palavras chave (keywords) 3=> */
		3 => array(
            '&analyze-resume', '&analyze-suspend', '&batch-mode', '&else', '&elseif', '&endif',
			'&file-name', '&glob', '&global', '&global-define', '&if', '&line-number', '&message',
			'&opsys', '&scop', '&scoped', '&scoped-define', '&sequence', '&text-height', '&then',
			'&undefine', '&window-system', '_cbit', '_control', '_dcm', '_list', '_memory', '_msg',
			'_pcontrol', '_serial-num', 'abort', 'abs', 'absolute', 'accelerator', 'accum', 'accumulate',
			'across', 'active-window', 'add', 'add-buffer', 'add-calc-col', 'add-calc-column',
			'add-columns-from', 'add-events-proc', 'add-events-procedure', 'add-fields-from',
			'add-first', 'add-index-field', 'add-last', 'add-like-col', 'add-like-column',
			'add-like-field', 'add-like-index', 'add-new-field', 'add-new-index', 'add-super-proc',
			'add-super-procedure', 'adm-data', 'advise', 'alert-box', 'alias', 'all',
			'allow-column-searching', 'allow-replication', 'alter', 'always-on-top', 'ambig', 'ambiguous',
			'analyze', 'and', 'ansi-only', 'any', 'any-key', 'any-printable', 'anywhere', 'append',
			'append-child', 'append-line', 'appl-alert', 'appl-alert-boxes', 'application', 'apply',
			'array-m', 'array-message', 'as', 'asc', 'ascending', 'as-cursor', 'ask-overwrite', 'assign',
			'asynchronous', 'async-request-count', 'at', 'attach', 'attachment', 'attr', 'attribute-names',
			'attribute-type', 'attr-space', 'authorization', 'auto-comp', 'auto-completion',
			'auto-delete-xml', 'auto-endkey', 'auto-end-key', 'auto-go', 'auto-ind', 'auto-indent',
			'automatic', 'auto-resize', 'auto-ret', 'auto-return', 'auto-val', 'auto-validate',
			'auto-z', 'auto-zap', 'avail', 'available', 'available-formats', 'ave', 'average', 'avg', 'back',
			'background', 'backspace', 'back-tab', 'backward', 'backwards', 'base-key', 'batch', 'batch-mode',
			'before-h', 'before-hide', 'begins', 'bell', 'between', 'bgc', 'bgcolor', 'big-endian', 'bin',
			'binary', 'bind-where', 'blank', 'block', 'block-iteration-display', 'border-b', 'border-bottom',
			'border-bottom-c', 'border-bottom-chars', 'border-bottom-p', 'border-bottom-pixels', 'border-l',
			'border-left', 'border-left-c', 'border-left-chars', 'border-left-p', 'border-left-pixels',
			'border-r', 'border-right', 'border-right-c', 'border-right-chars', 'border-right-p',
			'border-right-pixels', 'border-t', 'border-top', 'border-top-c', 'border-top-chars',
			'border-top-p', 'border-top-pixels', 'both', 'bottom', 'bottom-column', 'box', 'box-select',
			'box-selectable', 'break', 'break-line', 'browse', 'browse-column-data-types',
			'browse-column-formats', 'browse-column-labels', 'browse-header', 'btos', 'buffer',
			'buffer-chars', 'buffer-comp', 'buffer-compare', 'buffer-copy', 'buffer-create',
			'buffer-delete', 'buffer-field', 'buffer-handle', 'buffer-lines', 'buffer-n', 'buffer-name',
			'buffer-releas', 'buffer-release', 'buffer-value', 'button', 'buttons', 'by', 'by-pointer',
			'byte', 'bytes-read', 'bytes-written', 'by-variant-point', 'by-variant-pointer', 'cache',
			'cache-size', 'call', 'cancel-break', 'cancel-button', 'cancelled', 'cancel-pick',
			'cancel-requests', 'can-crea', 'can-create', 'can-dele', 'can-delete', 'can-do', 'can-find',
			'can-query', 'can-read', 'can-set', 'can-writ', 'can-write', 'caps', 'careful-paint', 'case',
			'case-sen', 'case-sensitive', 'cdecl', 'center', 'centered', 'chained', 'char', 'character_length',
			'character', 'charset', 'check', 'checked', 'child-num', 'choose', 'chr', 'clear', 'clear-select',
			'clear-selection', 'client-connection-id', 'clipboard', 'clone-node', 'close', 'code', 'codepage',
			'codepage-convert', 'col', 'collate', 'col-of', 'colon', 'colon-align', 'colon-aligned', 'color',
			'color-table', 'column', 'column-bgc', 'column-bgcolor', 'column-dcolor', 'column-fgc',
			'column-fgcolor', 'column-font', 'column-lab', 'column-label', 'column-label-bgc',
			'column-label-bgcolor', 'column-label-dcolor', 'column-label-fgc', 'column-label-fgcolor',
			'column-label-font', 'column-label-height-c', 'column-label-height-chars',
			'column-label-height-p', 'column-label-height-pixels', 'column-movable', 'column-of',
			'column-pfc', 'column-pfcolor', 'column-read-only', 'column-resizable', 'columns', 'column-sc',
			'column-scrolling', 'combo-box', 'com-handle', 'command', 'compare', 'compares', 'compile',
			'compiler', 'complete', 'component-handle', 'component-self', 'com-self', 'config-name',
			'connect', 'connected', 'constrained', 'container-event', 'contains', 'contents', 'context',
			'context-help', 'context-help-file', 'context-help-id', 'context-pop', 'context-popup',
			'control', 'control-box', 'control-cont', 'control-container', 'control-fram', 'control-frame',
			'convert', 'convert-3d', 'convert-3d-colors', 'convert-to-offs', 'convert-to-offset', 'copy',
			'count', 'count-of', 'coverage', 'cpcase', 'cpcoll', 'cpint', 'cpinternal', 'cplog', 'cpprint',
			'cprcodein', 'cprcodeout', 'cpstream', 'cpterm', 'crc-val', 'crc-value', 'create',
			'create-attribute-ns', 'create-element-ns', 'create-like', 'create-node', 'create-on-add',
			'create-result-list-entry', 'create-test-file', 'ctos', 'current_date', 'current',
			'current-changed', 'current-column', 'current-env', 'current-environment', 'current-iteration',
			'current-lang', 'current-language', 'current-result-row', 'current-row-modified',
			'current-value', 'current-window', 'curs', 'cursor', 'cursor-char', 'cursor-down', 'cursor-left',
			'cursor-line', 'cursor-offset', 'cursor-right', 'cursor-up', 'cut', 'data-b', 'database',
			'data-bind', 'data-entry-ret', 'data-entry-return', 'data-refresh-line', 'data-refresh-page',
			'dataservers', 'data-t', 'data-type', 'date', 'date-f', 'date-format', 'day', 'dbcodepage',
			'dbcollation', 'dbname', 'dbparam', 'db-references', 'dbrest', 'dbrestrictions', 'dbtaskid',
			'dbtype', 'dbvers', 'dbversion', 'dcolor', 'dde', 'dde-error', 'dde-i', 'dde-id', 'dde-item',
			'dde-name', 'dde-notify', 'dde-topic', 'deblank', 'debu', 'debug', 'debug-alert', 'debugger',
			'debug-list', 'dec', 'decimal', 'decimals', 'declare', 'def', 'default', 'default-action',
			'default-buffer-handle', 'default-but', 'default-button', 'default-commit', 'default-ex',
			'default-extension', 'default-noxl', 'default-noxlate', 'default-pop-up', 'default-window',
			'defer-lob-fetch', 'define', 'defined', 'del', 'delete', 'delete-char', 'delete-character',
			'delete-column', 'delete-current-row', 'delete-end-line', 'delete-field', 'delete-line',
			'delete-node', 'delete-result-list-entry', 'delete-selected-row', 'delete-selected-rows',
			'delete-word', 'delimiter', 'desc', 'descending', 'descript', 'description', 'deselect',
			'deselect-extend', 'deselect-focused-row', 'deselection', 'deselection-extend', 'deselect-rows',
			'deselect-selected-row', 'detach', 'dialog-box', 'dialog-help', 'dict', 'dictionary', 'dir',
			'directory', 'disable', 'disable-auto-zap', 'disable-connections', 'disabled', 'discon',
			'disconnect', 'dismiss-menu', 'disp', 'display', 'display-message', 'display-t', 'display-type',
			'distinct', 'do', 'dos', 'dos-end', 'double', 'down', 'drag-enabled', 'drop', 'drop-down',
			'drop-down-list', 'drop-file-notify', 'drop-target', 'dump', 'dynamic', 'dynamic-func',
			'dynamic-function', 'each', 'echo', 'edge', 'edge-c', 'edge-chars', 'edge-p', 'edge-pixels',
			'edit-can-paste', 'edit-can-undo', 'edit-clear', 'edit-copy', 'edit-cut', 'editing', 'editor',
			'editor-backtab', 'editor-tab', 'edit-paste', 'edit-undo', 'else', 'empty', 'empty-selection',
			'empty-temp-table', 'enable', 'enable-connections', 'enabled', 'encode', 'encoding', 'end',
			'end-box-selection', 'end-error', 'end-file-drop', 'endkey', 'end-key', 'end-move', 'end-resize',
			'end-row-resize', 'end-search', 'entered', 'enter-menubar', 'entry', 'eq', 'error', 'error-col',
			'error-column', 'error-row', 'error-stat', 'error-status', 'escape', 'etime', 'event-procedure',
			'event-procedure-context', 'events', 'event-t', 'event-type', 'except', 'exclusive',
			'exclusive-id', 'exclusive-l', 'exclusive-lock', 'exclusive-web', 'exclusive-web-user',
			'execute', 'execution-log', 'exists', 'exit', 'exp', 'expand', 'expandable', 'explicit', 'export',
			'extended', 'extent', 'external', 'extract', 'false', 'fetch', 'fetch-selected-row', 'fgc',
			'fgcolor', 'field', 'fields', 'file', 'file-access-d', 'file-access-date', 'file-access-t',
			'file-access-time', 'file-create-d', 'file-create-date', 'file-create-t', 'file-create-time',
			'file-info', 'file-information', 'file-mod-d', 'file-mod-date', 'file-mod-t', 'file-mod-time',
			'filename', 'file-name', 'file-off', 'file-offset', 'file-size', 'file-type', 'fill', 'filled',
			'fill-in', 'filters', 'find', 'find-by-rowid', 'find-case-sensitive', 'finder', 'find-global',
			'find-next-occurrence', 'find-prev-occurrence', 'find-select', 'find-wrap-around', 'first',
			'first-async', 'first-async-request', 'first-buffer', 'first-child', 'first-column', 'first-of',
			'first-proc', 'first-procedure', 'first-serv', 'first-server', 'first-server-socket',
			'first-socket', 'first-tab-i', 'first-tab-item', 'fixed-only', 'flat-button', 'float', 'focus',
			'focused-row', 'focused-row-selected', 'focus-in', 'font', 'font-table', 'for', 'force-file',
			'fore', 'foreground', 'form', 'format', 'form-input', 'forward', 'forwards', 'fram', 'frame',
			'frame-col', 'frame-db', 'frame-down', 'frame-field', 'frame-file', 'frame-inde', 'frame-index',
			'frame-line', 'frame-name', 'frame-row', 'frame-spa', 'frame-spacing', 'frame-val', 'frame-value',
			'frame-x', 'frame-y', 'frequency', 'from', 'from-c', 'from-chars', 'from-cur', 'from-current',
			'fromnoreorder', 'from-p', 'from-pixels', 'full-height', 'full-height-c', 'full-height-chars',
			'full-height-p', 'full-height-pixels', 'full-pathn', 'full-pathname', 'full-width',
			'full-width-chars', 'full-width-p', 'full-width-pixels', 'function', 'function', 'gateway',
			'gateways', 'ge', 'get', 'get-attribute', 'get-bits', 'get-blue', 'get-blue-value',
			'get-browse-col', 'get-browse-column', 'get-buffer-handle', 'getbyte', 'get-byte',
			'get-byte-order', 'get-bytes', 'get-bytes-available', 'get-cgi-list', 'get-cgi-value',
			'get-child', 'get-codepage', 'get-codepages', 'get-coll', 'get-collations', 'get-config-value',
			'get-curr', 'get-current', 'get-document-element', 'get-double', 'get-dropped-file',
			'get-dynamic', 'get-file', 'get-firs', 'get-first', 'get-float', 'get-green', 'get-green-value',
			'get-iteration', 'get-key-val', 'get-key-value', 'get-last', 'get-license', 'get-long',
			'get-message', 'get-next', 'get-number', 'get-parent', 'get-pointer-value', 'get-prev',
			'get-printers', 'get-red', 'get-red-value', 'get-repositioned-row', 'get-rgb', 'get-rgb-value',
			'get-selected', 'get-selected-widget', 'get-short', 'get-signature', 'get-size',
			'get-socket-option', 'get-string', 'get-tab-item', 'get-text-height', 'get-text-height-c',
			'get-text-height-chars', 'get-text-height-p', 'get-text-height-pixels', 'get-text-width',
			'get-text-width-c', 'get-text-width-chars', 'get-text-width-p', 'get-text-width-pixels',
			'get-unsigned-short', 'get-wait', 'get-wait-state', 'global', 'go', 'go-on', 'go-pend',
			'go-pending', 'goto', 'grant', 'graphic-e', 'graphic-edge', 'grayed', 'grid-factor-h',
			'grid-factor-horizontal', 'grid-factor-v', 'grid-factor-vertical', 'grid-set',
			'grid-snap', 'grid-unit-height', 'grid-unit-height-c', 'grid-unit-height-chars',
			'grid-unit-height-p', 'grid-unit-height-pixels', 'grid-unit-width', 'grid-unit-width-c',
			'grid-unit-width-chars', 'grid-unit-width-p', 'grid-unit-width-pixels', 'grid-visible',
			'group', 'gt', 'handle', 'having', 'header', 'height', 'height-c', 'height-chars', 'height-p',
			'height-pixels', 'help', 'help-con', 'help-context', 'helpfile-n', 'helpfile-name', 'hidden',
			'hide', 'hint', 'home', 'hori', 'horiz-end', 'horiz-home', 'horizontal', 'horiz-scroll-drag',
			'host-byte-order', 'html-end-of-line', 'html-end-of-page', 'html-frame-begin',
			'html-frame-end', 'html-header-begin', 'html-header-end', 'html-title-begin',
			'html-title-end', 'hwnd', 'icon', 'if', 'image', 'image-down', 'image-insensitive', 'image-size',
			'image-size-c', 'image-size-chars', 'image-size-p', 'image-size-pixels', 'image-up',
			'immediate-display', 'import', 'import-node', 'in', 'increment-exclusive-id', 'index',
			'indexed-reposition', 'index-hint', 'index-info', 'index-information', 'indicator',
			'info', 'information', 'init', 'initial', 'initial-dir', 'initial-filter', 'initiate', 'inner',
			'inner-chars', 'inner-lines', 'input', 'input-o', 'input-output', 'input-value', 'insert',
			'insert-b', 'insert-backtab', 'insert-before', 'insert-column', 'insert-field',
			'insert-field-data', 'insert-field-label', 'insert-file', 'insert-mode', 'insert-row',
			'insert-string', 'insert-t', 'insert-tab', 'int', 'integer', 'internal-entries', 'into', 'is',
			'is-attr', 'is-attr-space', 'is-lead-byte', 'is-open', 'is-row-selected', 'is-selected',
			'is-xml', 'item', 'items-per-row', 'iteration-changed', 'join', 'join-by-sqldb', 'kblabel',
			'keep-frame-z', 'keep-frame-z-order', 'keep-messages', 'keep-tab-order', 'key', 'keycode',
			'key-code', 'keyfunc', 'key-func', 'keyfunction', 'key-function', 'keylabel', 'key-label', 'keys',
			'keyword', 'keyword-all', 'label', 'label-bgc', 'label-bgcolor', 'label-dc', 'label-dcolor',
			'label-fgc', 'label-fgcolor', 'label-font', 'label-pfc', 'label-pfcolor', 'labels', 'landscape',
			'language', 'languages', 'large', 'large-to-small', 'last', 'last-async', 'last-async-request',
			'last-child', 'last-even', 'last-event', 'lastkey', 'last-key', 'last-of', 'last-proce',
			'last-procedure', 'last-serv', 'last-server', 'last-server-socket', 'last-socket', 'last-tab-i',
			'last-tab-item', 'lc', 'ldbname', 'le', 'leading', 'leave', 'left', 'left-align', 'left-aligned',
			'left-end', 'left-trim', 'length', 'library', 'like', 'line', 'line-count', 'line-counter',
			'line-down', 'line-left', 'line-right', 'line-up', 'list-events', 'listi', 'listing', 'listings',
			'list-item-pairs', 'list-items', 'list-query-attrs', 'list-set-attrs', 'list-widgets',
			'little-endian', 'load', 'load-from', 'load-icon', 'load-image', 'load-image-down',
			'load-image-insensitive', 'load-image-up', 'load-mouse-p', 'load-mouse-pointer',
			'load-picture', 'load-small-icon', 'local-host', 'local-name', 'local-port', 'locked', 'log',
			'log', 'logical', 'logical', 'log-id', 'long', 'long', 'lookahead', 'lookup', 'lower', 'lt',
			'machine-class', 'mandatory', 'manual-highlight', 'map', 'margin-extra', 'margin-height',
			'margin-height-c', 'margin-height-chars', 'margin-height-p', 'margin-height-pixels',
			'margin-width', 'margin-width-c', 'margin-width-chars', 'margin-width-p',
			'margin-width-pixels', 'matches', 'max', 'max-button', 'max-chars', 'max-data-guess',
			'max-height', 'max-height-c', 'max-height-chars', 'max-height-p', 'max-height-pixels',
			'maximize', 'maximum', 'max-rows', 'max-size', 'max-val', 'max-value', 'max-width', 'max-width-c',
			'max-width-chars', 'max-width-p', 'max-width-pixels', 'member', 'memory', 'memptr', 'menu',
			'menubar', 'menu-bar', 'menu-drop', 'menu-item', 'menu-k', 'menu-key', 'menu-m', 'menu-mouse',
			'message', 'message-area', 'message-area-font', 'message-line', 'message-lines', 'min',
			'min-button', 'min-height', 'min-height-c', 'min-height-chars', 'min-height-p',
			'min-height-pixels', 'minimum', 'min-row-height', 'min-row-height-c', 'min-row-height-chars',
			'min-row-height-p', 'min-row-height-pixels', 'min-size', 'min-val', 'min-value', 'min-width',
			'min-width-c', 'min-width-chars', 'min-width-p', 'min-width-pixels', 'mod', 'modified', 'modulo',
			'month', 'mouse', 'mouse-p', 'mouse-pointer', 'movable', 'move', 'move-after',
			'move-after-tab-item', 'move-befor', 'move-before', 'move-before-tab-item', 'move-col',
			'move-column', 'move-to-b', 'move-to-bottom', 'move-to-eof', 'move-to-t', 'move-to-top',
			'mpe', 'multiple', 'multiple-key', 'multitasking-interval', 'must-exist', 'name',
			'namespace-prefix', 'namespace-uri', 'native', 'ne', 'new', 'new-line', 'new-row', 'next',
			'next-col', 'next-column', 'next-prompt', 'next-sibling', 'next-tab-ite', 'next-tab-item',
			'next-value', 'no', 'no-apply', 'no-array-m', 'no-array-message', 'no-assign', 'no-attr',
			'no-attr-l', 'no-attr-list', 'no-attr-s', 'no-attr-space', 'no-auto-validate', 'no-bind-where',
			'no-box', 'no-column-sc', 'no-column-scrolling', 'no-console', 'no-convert', 'no-convert-3d',
			'no-convert-3d-colors', 'no-current-value', 'no-debug', 'node-type', 'node-value', 'no-drag',
			'no-echo', 'no-error', 'no-f', 'no-fill', 'no-focus', 'no-help', 'no-hide', 'no-index-hint',
			'no-join-by-sqldb', 'no-label', 'no-labels', 'no-lock', 'no-lookahead', 'no-map', 'no-mes',
			'no-message', 'none', 'no-pause', 'no-prefe', 'no-prefetch', 'no-return-val', 'no-return-value',
			'normalize', 'no-row-markers', 'no-scrollbar-v', 'no-scrollbar-vertical', 'no-scrolling',
			'no-separate-connection', 'no-separators', 'not', 'no-tab', 'no-tab-stop', 'no-und',
			'no-underline', 'no-undo', 'no-val', 'no-validate', 'no-wait', 'no-word-wrap', 'null', 'num-ali',
			'num-aliases', 'num-buffers', 'num-but', 'num-buttons', 'num-children', 'num-col', 'num-columns',
			'num-copies', 'num-dbs', 'num-dropped-files', 'num-entries', 'numeric', 'numeric-dec',
			'numeric-decimal-point', 'numeric-f', 'numeric-format', 'numeric-sep', 'numeric-separator',
			'num-fields', 'num-formats', 'num-items', 'num-iterations', 'num-lines', 'num-locked-col',
			'num-locked-columns', 'num-messages', 'num-repl', 'num-replaced', 'num-results', 'num-selected',
			'num-selected-rows', 'num-selected-widgets', 'num-tabs', 'num-to-retain', 'num-visible-col',
			'num-visible-columns', 'object', 'octet_length', 'of', 'off', 'off-end', 'off-home', 'ok-cancel',
			'old', 'ole-invoke-loca', 'ole-invoke-locale', 'ole-names-loca', 'ole-names-locale', 'on',
			'on-frame', 'on-frame-border', 'open', 'opsys', 'option', 'or', 'ordered-join', 'ordinal',
			'orientation', 'os2', 'os400', 'os-append', 'os-command', 'os-copy', 'os-create-dir', 'os-delete',
			'os-dir', 'os-drive', 'os-drives', 'os-error', 'os-getenv', 'os-rename', 'otherwise', 'outer',
			'outer-join', 'output', 'overlay', 'override', 'owner', 'owner-document', 'page', 'page-bot',
			'page-bottom', 'paged', 'page-down', 'page-left', 'page-num', 'page-number', 'page-right',
			'page-right-text', 'page-size', 'page-top', 'page-up', 'page-wid', 'page-width', 'param',
			'parameter', 'parent', 'parent-window-close', 'partial-key', 'pascal', 'paste', 'pathname',
			'pause', 'pdbname', 'perf', 'performance', 'persist', 'persistent', 'persistent-procedure',
			'pfc', 'pfcolor', 'pinnable', 'pixels', 'pixels-per-col', 'pixels-per-column', 'pixels-per-row',
			'popup-m', 'popup-menu', 'popup-o', 'popup-only', 'portrait', 'position', 'precision', 'prepared',
			'prepare-string', 'preproc', 'preprocess', 'presel', 'preselect', 'prev', 'prev-col',
			'prev-column', 'prev-frame', 'prev-sibling', 'prev-tab-i', 'prev-tab-item', 'prev-word',
			'primary', 'printer', 'printer-control-handle', 'printer-hdc', 'printer-name', 'printer-port',
			'printer-setup', 'private', 'private-d', 'private-data', 'privileges', 'proce', 'procedure',
			'procedure', 'procedure-complete', 'procedure-name', 'process', 'proc-ha', 'proc-handle',
			'proc-st', 'proc-status', 'profile-file', 'profiler', 'profiling', 'program-name', 'progress',
			'progress-s', 'progress-source', 'prompt', 'prompt-f', 'prompt-for', 'promsgs', 'propath',
			'provers', 'proversion', 'proxy', 'publish', 'published-events', 'put', 'put-bits', 'putbyte',
			'put-byte', 'put-bytes', 'put-double', 'put-float', 'put-key-val', 'put-key-value', 'put-long',
			'put-short', 'put-string', 'put-unsigned-short', 'query', 'query-close', 'query-off-end',
			'query-open', 'query-prepare', 'query-tuning', 'question', 'quit', 'radio-buttons', 'radio-set',
			'random', 'raw', 'raw-transfer', 'rcode-info', 'rcode-information', 'read', 'read-available',
			'read-exact-num', 'read-file', 'readkey', 'read-only', 'read-response', 'real', 'recall', 'recid',
			'record-len', 'record-length', 'rect', 'rectangle', 'recursive', 'refresh', 'refreshable',
			'release', 'remote', 'remote-host', 'remote-port', 'remove-attribute', 'remove-child',
			'remove-events-proc', 'remove-events-procedure', 'remove-super-proc', 'remove-super-procedure',
			'repeat', 'replace', 'replace-child', 'replace-selection-text', 'replication-create',
			'replication-delete', 'replication-write', 'reports', 'reposition', 'reposition-back',
			'reposition-backwards', 'reposition-forw', 'reposition-forwards', 'reposition-to-row',
			'reposition-to-rowid', 'request', 'resiza', 'resizable', 'resize', 'result', 'resume-display',
			'retain', 'retain-s', 'retain-shape', 'retry', 'retry-cancel', 'return', 'return-ins',
			'return-inserted', 'returns', 'return-to-start-di', 'return-to-start-dir', 'return-val',
			'return-value', 'reverse-from', 'revert', 'revoke', 'rgb-v', 'rgb-value', 'right', 'right-align',
			'right-aligned', 'right-end', 'right-trim', 'r-index', 'round', 'row', 'row-display', 'row-entry',
			'row-height', 'row-height-c', 'row-height-chars', 'row-height-p', 'row-height-pixels', 'rowid',
			'row-leave', 'row-ma', 'row-markers', 'row-of', 'row-resizable', 'rule', 'rule-row', 'rule-y',
			'run', 'run-proc', 'run-procedure', 'save', 'save-as', 'save-file', 'sax-xml', 'schema', 'screen',
			'screen-io', 'screen-lines', 'screen-val', 'screen-value', 'scroll', 'scrollable',
			'scrollbar-drag', 'scrollbar-h', 'scrollbar-horizontal', 'scroll-bars', 'scrollbar-v',
			'scrollbar-vertical', 'scroll-delta', 'scrolled-row-pos', 'scrolled-row-position',
			'scroll-horiz-value', 'scrolling', 'scroll-left', 'scroll-mode', 'scroll-notify',
			'scroll-offset', 'scroll-right', 'scroll-to-current-row', 'scroll-to-i', 'scroll-to-item',
			'scroll-to-selected-row', 'scroll-vert-value', 'sdbname', 'search', 'search-self',
			'search-target', 'se-check-pools', 'section', 'seek', 'se-enable-off', 'se-enable-on', 'select',
			'selectable', 'select-all', 'selected', 'selected-items', 'select-extend', 'select-focused-row',
			'selection', 'selection-end', 'selection-extend', 'selection-list', 'selection-start',
			'selection-text', 'select-next-row', 'select-prev-row', 'select-repositioned-row', 'select-row',
			'self', 'send', 'sensitive', 'se-num-pools', 'separate-connection', 'separator-fgc',
			'separator-fgcolor', 'separators', 'server', 'server-connection-bo', 'server-connection-bound',
			'server-connection-bound-re', 'server-connection-bound-request', 'server-connection-co',
			'server-connection-context', 'server-connection-id', 'server-operating-mode', 'server-socket',
			'session', 'set', 'set-attribute', 'set-blue', 'set-blue-value', 'set-break', 'set-buffers',
			'set-byte-order', 'set-cell-focus', 'set-commit', 'set-connect-procedure', 'set-contents',
			'set-dynamic', 'set-green', 'set-green-value', 'set-leakpoint', 'set-numeric-form',
			'set-numeric-format', 'set-pointer-val', 'set-pointer-value', 'set-prefix',
			'set-read-response-procedure', 'set-red', 'set-red-value', 'set-repositioned-row', 'set-rgb',
			'set-rgb-value', 'set-rollback', 'set-selection', 'set-size', 'set-socket-option', 'settings',
			'setuser', 'setuserid', 'set-wait', 'set-wait-state', 'se-use-message', 'share', 'shared',
			'share-lock', 'short', 'show-in-task', 'show-in-taskbar', 'show-stat', 'show-stats', 'side-lab',
			'side-label', 'side-label-h', 'side-label-handle', 'side-labels', 'silent', 'simple', 'single',
			'size', 'size-c', 'size-chars', 'size-p', 'size-pixels', 'skip', 'skip-deleted-rec',
			'skip-deleted-record', 'skip-schema-check', 'slider', 'small-icon', 'smallint', 'small-title',
			'socket', 'some', 'sort', 'source', 'source-procedure', 'space', 'sql', 'sqrt', 'start',
			'start-box-selection', 'start-extend-box-selection', 'start-move', 'start-resize',
			'start-row-resize', 'start-search', 'status', 'status-area', 'status-area-font', 'status-bar',
			'stdcall', 'stenciled', 'stop', 'stoppe', 'stopped', 'stored-proc', 'stored-procedure', 'stream',
			'stream-io', 'stretch-to-fit', 'string', 'string-value', 'string-xref', 'sub-ave', 'sub-average',
			'sub-count', 'sub-max', 'sub-maximum', 'sub-menu', 'sub-menu-help', 'sub-min', 'sub-minimum',
			'subscribe', 'subst', 'substitute', 'substr', 'substring', 'sub-total', 'subtype', 'sum', 'summary',
			'super', 'super-proc', 'super-procedures', 'suppress-w', 'suppress-warnings', 'system-alert',
			'system-alert-boxes', 'system-dialog', 'system-help', 'tab', 'table', 'table-handle', 'table-num',
			'table-number', 'tab-position', 'tab-stop', 'target', 'target-procedure', 'temp-dir',
			'temp-directory', 'temp-table', 'temp-table-prepar', 'temp-table-prepare', 'term', 'terminal',
			'terminate', 'text', 'text-cursor', 'text-seg', 'text-seg-growth', 'text-selected', 'then',
			'this-procedure', 'three-d', 'through', 'thru', 'tic-marks', 'time', 'time-source', 'title',
			'title-bgc', 'title-bgcolor', 'title-dc', 'title-dcolor', 'title-fgc', 'title-fgcolor',
			'title-fo', 'title-font', 'to', 'today', 'toggle-box', 'tool-bar', 'tooltip', 'tooltips',
			'top', 'topic', 'top-only', 'to-rowid', 'total', 'trace-filter', 'tracing', 'trailing', 'trans',
			'transact', 'transaction', 'transaction-mode', 'trans-init-proc', 'trans-init-procedure',
			'transpar', 'transparent', 'trigger', 'triggers', 'trim', 'true', 'trunc', 'truncate', 'type',
			'unbuff', 'unbuffered', 'underl', 'underline', 'undo', 'unform', 'unformatted', 'union', 'unique',
			'unique-id', 'unique-match', 'unix', 'unless-hidden', 'unload', 'unsigned-short', 'unsubscribe',
			'up', 'update', 'upper', 'url-decode', 'url-encode', 'use', 'use-dic', 'use-dict-exps',
			'use-filename', 'use-index', 'user', 'user-data', 'use-revvideo', 'userid', 'use-text',
			'use-underline', 'using', 'utc-offset', 'v6display', 'v6frame', 'validate', 'validate-expressio',
			'validate-expression', 'validate-message', 'validate-xml', 'valid-event', 'valid-handle',
			'value', 'value-changed', 'values', 'var', 'var', 'variable', 'verb', 'verbose', 'vert', 'vertical',
			'view', 'view-as', 'virtual-height', 'virtual-height-c', 'virtual-height-chars',
			'virtual-height-p', 'virtual-height-pixels', 'virtual-width', 'virtual-width-c',
			'virtual-width-chars', 'virtual-width-p', 'virtual-width-pixels', 'visible', 'vms', 'wait',
			'wait-for', 'warning', 'web-con', 'web-context', 'web-notify', 'weekday', 'when', 'where', 'while',
			'widget', 'widget-e', 'widget-enter', 'widget-h', 'widget-handle', 'widget-l', 'widget-leave',
			'widget-pool', 'width', 'width-c', 'width-chars', 'width-p', 'width-pixels', 'window',
			'window-close', 'window-delayed-min', 'window-delayed-minimize', 'window-maxim',
			'window-maximized', 'window-minim', 'window-minimized', 'window-name', 'window-normal',
			'window-resized', 'window-restored', 'window-sta', 'window-state', 'window-sys', 'window-system',
			'with', 'word-index', 'word-wrap', 'work-area-height-p', 'work-area-height-pixels',
			'work-area-width-p', 'work-area-width-pixels', 'work-area-x', 'work-area-y', 'workfile',
			'work-tab', 'work-table', 'write', 'write-data', 'xcode', 'x-document', 'x-noderef', 'x-of', 'xref',
			'year', 'year-offset', 'yes', 'yes-no', 'yes-no-cancel', 'y-of', 'LT', 'GT'
			),
		/* metodos 4 (methods)=> */
		4 => array (
            'formatted', 'SET-OUTPUT-DESTINATION', 'START-DOCUMENT', 'INSERT-ATTRIBUTE',
			'WRITE-DATA-ELEMENT', 'END-ELEMENT', 'END-DOCUMENT', 'START-ELEMENT'
			),
		6 => array ('abacaxi', 'mamao', 'banana'
			)
		),
	'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}',
        '<', '>', '=',
        '+', '-', '*', '/',
        '!', '@', '%', '|', '$',
        ':', '.', ';', ','
		),
	'CASE_SENSITIVE' => array (
		GESHI_COMMENTS => false,
		3 => false,
		4 => false,
		6 => false
		),
	'STYLES' => array (
        'KEYWORDS' => array (
            3 => 'color: #ff8000; font-weight: bold;',
			4 => 'color: #1D16B2;',
			6 => 'color: #ff8000; font-weight: bold;'
			),
		'COMMENTS' => array (
            1 => 'color: #808080; font-style: italic;',
			2 => 'color: #808080; font-style: italic;',
			'MULTI' => 'color: #808080; font-style: italic;'
			),
		'ESCAPE_CHAR' => array (
            0 => 'color: #000099; font-weight: bold;'
			),
		'BRACKETS' => array (
            0 => 'color: #66cc66;'
			),
		'STRINGS' => array (
            0 => 'color: #ff0000;'
			),
		'NUMBERS' => array (
            0 => 'color: #cc66cc;'
			),
		'METHODS' => array (
            0 => 'color: #006600;'
			),
		'SYMBOLS' => array (
            0 => 'color: #66cc66;'
			),
		'REGEXPS' => array (
			),
		'SCRIPT' => array (
			)
		),
	'OOLANG' => true,
	'OBJECT_SPLITTERS' => array(
        0 => ':'
        ),
	'REGEXPS' => array (
		),
	'STRICT_MODE_APPLIES' => GESHI_NEVER,
	'SCRIPT_DELIMITERS' => array (
		),
	'HIGHLIGHT_STRICT_BLOCK' => array (
		),
	'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "\.\-a-zA-Z0-9_\$\#&",
            'DISALLOWED_AFTER' =>  "\-a-zA-Z0-9_%"
        )
    )
);

?>