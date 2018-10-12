<div>
    <h1>Hello {{ $demo->receiver }}</h1>,
    <p>This is a demo email for testing purposes! Also, it's the HTML version.</p>
    <hr>
    <p>Demo object values:</p>
    <pre>
        Demo One: {{ $demo->demo_one }}
        Demo Two: {{ $demo->demo_two }}

        Values passed by With method:

        testVarOne: {{ $testVarOne }}
        testVarOne: {{ $testVarOne }}

    </pre>

    Thank You,
    {{ $demo->sender }}

</div>
