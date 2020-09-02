<?php
// define clase
class Element
{
    public $name;
    public $value;
    public $label;
    // constructor
    public function _construct()
    {
    }
    // método: crea el elemento 'name'
    public function creaName($name)
    {
        $this->name = $name;
    }
    // método: trae el elemento 'name'
    public function traeName()
    {
        return $this->name;
    }
    // método: crea el elemento 'value'
    public function creaValue($value)
    {
        $this->value = $value;
    }
    // método: trae el elemento 'value'
    public function traeValue()
    {
        return $this->value;
    }
    // método: crea elemento de texto 'label'
    public function creaLabel($label)
    {
        $this->label = $label;
    }
    // método: trae elemento 'label'
    public function traeLabel()
    {
        return $this->label;
    }
}
?>

<?php
// definición de la clase secundaria
class Option extends Element
{
    // constructor
    public function _construct($value = ' ', $label = ' ')
    {
        parent::_construct();
        $this->creaValue($value);
        $this->creaLabel($label);
    }
    // método: datos de salida HTML para los elementos <option>
    public function render()
    {
        echo "<option value=\"" . $this->traeValue() . "\">" . $this->traeLabel() . "</option>\n";
    }
}
?>

<?php
// define clase secundaria
class Select extends Element
{
    public $options;
    // constructor
    public function _construct()
    {
        parent::_construct();
        $this->options = array();
    }
    // método: añade una opción a la lista
    public function creaOption($option)
    {
        $this->options[] = $option;
    }
    // método: regresa todas las opciones para la lista como una matriz
    public function traeOptions()
    {
        return (array)$this->options;
    }
    // método: envía el código HTML para la etiqueta <select>
    public function render()
    {
        echo $this->traeLabel() . ": <br />\n";
        echo "<select name=" . $this->traeName() . ">\n";
        foreach ($this->traeOptions() as $opt) {
            echo $opt->render();
        }
        echo "</select>";
    }
}
?>

<?php
 // genera una lista de selección
 $frutas = new Select();
 $frutas->creaLabel('Frutas');
 $frutas->creaName('frut_sel');
 $frutas->creaOption(new Option('Naranjas', 'Naranjas'));
 $frutas->creaOption(new Option('Fresas', 'Fresas'));
 $frutas->creaOption(new Option('Piñas', 'Piñas'));
 $frutas->creaOption(new Option('Plátanos', 'Plátanos'));
 $frutas->render();
?>