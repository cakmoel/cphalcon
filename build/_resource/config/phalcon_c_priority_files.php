<?php
// These are priority files, their contents must be put into phalcon.c before any other source files

return array(
    // Header files
    //'assets/filters/nojsminifier.h',
    //'assets/filters/nocssminifier.h',
    'phalcon/mvc/model/query/parser.h',
    'phalcon/mvc/model/query/scanner.h',
    'phalcon/mvc/model/query/phql.h',
    'phalcon/mvc/view/engine/volt/parser.h',
    'phalcon/mvc/view/engine/volt/scanner.h',
    'phalcon/mvc/view/engine/volt/volt.h',
    'phalcon/annotations/parser.h',
    'phalcon/annotations/scanner.h',
    'phalcon/annotations/annot.h',
    'kernel/main.h',
    'kernel/memory.h',
    'kernel/exception.h',
    'kernel/hash.h',
    'kernel/debug.h',
    'kernel/backtrace.h',
    'kernel/object.h',
    'kernel/array.h',
    'kernel/extended/array.h',
    'kernel/string.h',
    'kernel/fcall.h',
    'kernel/require.h',
    'kernel/file.h',
    'kernel/operators.h',
    'kernel/concat.h',
    'kernel/variables.h',
    'kernel/filter.h',
    'kernel/iterator.h',
    'kernel/time.h',
    'kernel/exit.h',
    'kernel/main.c',
    'kernel/memory.c',
    'kernel/exception.c',
    'kernel/hash.c',
    'kernel/debug.c',
    'kernel/backtrace.c',
    'kernel/object.c',
    'kernel/array.c',
    'kernel/extended/array.c',
    'kernel/string.c',
    'kernel/fcall.c',
    'kernel/require.c',
    'kernel/file.c',
    'kernel/operators.c',
    'kernel/concat.c',
    'kernel/variables.c',
    'kernel/filter.c',
    'kernel/iterator.c',
    'kernel/time.c',
    'kernel/exit.c',
    'phalcon/assets/filters/cssminifier.c',
    'phalcon/assets/filters/jsminifier.c',
);