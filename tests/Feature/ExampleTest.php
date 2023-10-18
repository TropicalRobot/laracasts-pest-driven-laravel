<?php

it('gives back a successful response for homepage', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
