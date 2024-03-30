<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @return void
 */

function loadView($name, $data = [])
{
    // require basePath("views/{$name}.view.php");

    $viewPath = basePath("App/views/{$name}.view.php");

    //inspect($name);
    //inspectAndDie($viewPath);

    if (file_exists($viewPath)) {
        extract($data); // It gives us to access the listing variables.
        require $viewPath;
    } else {
        echo "View '{$name} not found!'";
    }
}

/**
 * Load a partial
 * 
 * @param string $name
 * @return void
 */

function loadPartial($name)
{
    // require basePath("views/partials/{$name}.php");

    $partialPath = basePath("App/views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial '{$name} not found!'";
    }
}

/**
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

/**
 * Format salary
 * 
 * @param string $salary
 * @return string Formatted Salary
 */
function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
}
