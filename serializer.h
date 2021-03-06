/*
 * Protocol Buffers for PHP
 * Copyright 2013 Shuhei Tanuma.  All rights reserved.
 *
 * https://github.com/chobie/php-protocolbuffers
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are
 * met:
 *
 *   1. Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *   2. Redistributions in binary form must reproduce the above
 * copyright notice, this list of conditions and the following disclaimer
 * in the documentation and/or other materials provided with the
 * distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

#ifndef PHP_PROTOCOLBUFFERS_SERIALIZER_H
#define PHP_PROTOCOLBUFFERS_SERIALIZER_H

void php_protocolbuffers_serializer_destroy(php_protocolbuffers_serializer *serializer);

void php_protocolbuffers_serializer_init(php_protocolbuffers_serializer **serializer);

int php_protocolbuffers_encode_message(INTERNAL_FUNCTION_PARAMETERS, zval *klass, php_protocolbuffers_scheme_container *container, php_protocolbuffers_serializer **serializer);

int php_protocolbuffers_fetch_element(INTERNAL_FUNCTION_PARAMETERS, php_protocolbuffers_scheme_container *container, HashTable *hash, php_protocolbuffers_scheme *scheme, zval **output);

#endif