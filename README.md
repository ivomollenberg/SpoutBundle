# Box Spout Bundle
Symfony 2 Bundle for Box Spout excel library


## 1. Installation:

<pre><code>
composer require stev/spout-bundle
</code></pre>

Add this in app/AppKernel.php
<pre><code>
new \Stev\SpoutBundle\StevSpoutBundle()
</code></pre>


## 2. Usage, in a controller
<pre><code>
/* @var spout \Stev\SpoutBundle\Services\Spout */
    $spout = $this->get('stev_spout.box_spout');
    $reader = $spout->initReader();
    $writer = $spout->initWriter();
</code></pre>

Box Spout repository can be found at https://github.com/box/spout