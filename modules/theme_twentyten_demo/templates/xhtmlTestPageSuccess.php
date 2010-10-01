<!-- Sample Content to Plugin to Template -->
<a name="wrapper"></a>
<h1>Elementos Básicos CSS | Elementos Básicos del CSS | CSS Basic Elements</h1>

<div style="float:right;width:300px;margin:10px;border: 2px solid #efefef;padding:5px 0;">
  <h4>Índice | Indice | Index</h4>
  <ul>
    <li><a href="#headings">Títulos | Títulos | Headings</a></li>
    <li><a href="#paragraph">Parágrafo | Parárrafo | Paragraph</a></li>
    <li><a href="#list_types">Tipos de Lista | Tipos de Lista | List Types</a></li>
    <li><a href="#form_elements">Fieldsets, Legends, and Form Elements</a></li>
    <li><a href="#tables">Tabelas | Tablas | Tables</a></li>
    <li><a href="#misc">Miscelânea | Varios | Misc Stuff</a></li>
  </ul>
</div>

<p>O objetivo deste HTML é para ajudar a determinar quais as configurações padrão do CSS e ter certeza de que todos os elementos possíveis HTML estão incluídas nesta HTML, de modo a não perder nenhum elementos possíveis ao projetar um site.</p>

<p>El objetivo de este código HTML es ayudar a determinar la configuración por defecto son del CSS y para asegurarse de que todos los elementos posibles HTML se incluyen en este código HTML para que no falte ningún de los posibles elementos en el diseño de un sitio.</p>

<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

<p><em>Adaptado de | Adaptado de | Adapted from:<br/>
<a href="http://snipplr.com/view/8121/html-test-page-for-css-style-guide/<">http://snipplr.com/view/8121/html-test-page-for-css-style-guide/</a></em></p>
<hr />

<a name="headings"></a><h1>Títulos | Títulos | Headings</h1>

<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>

<small><a href="#wrapper">[top]</a></small>


<h1>Linha Horizontal | Línea Horizontal | Horizontal Line</h1>
<hr />

<a name="paragraph"></a><h1>Parágrafo | Parárrafo | Paragraph</h1>

<img src="images/LoremIpsumDesign.png" alt="CSS | God's Language" />
<p>Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

<p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

<small><a href="#wrapper">[top]</a></small>
<hr />

<a name="list_types"></a><h1>Tipos de Lista | Tipos de Lista | List Types</h1>

<h3>Lista de Definição | Lista de Definición | Definition List</h3>
<dl>
  <dt>Definition List Title</dt>
  <dd>This is a definition list division.</dd>
</dl>

<h3>Ordered List</h3>
<ol>
  <li>List Item 1</li>
  <li>List Item 2</li>
  <li>List Item 3</li>
</ol>

<h3>Unordered List</h3>
<ul>
  <li>List Item 1</li>
  <li>List Item 2</li>
  <li>List Item 3</li>
</ul>

<small><a href="#wrapper">[top]</a></small>
<hr />

<a name="form_elements"></a><h1>Fieldsets, Legends, and Form Elements</h1>

<fieldset>
  <legend>Legend</legend>

  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.</p>

  <form>
    <h2>Form Element</h2>

    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.</p>

    <p>
      <label for="text_field">Text Field:</label>
      <input type="text" id="text_field" />
    </p>

    <p>
      <label for="text_area">Text Area:</label>
      <textarea id="text_area"></textarea>
    </p>

    <p>
      <label for="select_element">Select Element:</label>
        <select name="select_element">
          <optgroup label="Option Group 1">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </optgroup>
          <optgroup label="Option Group 2">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </optgroup>
        </select>
      <div class="clear">&nbsp;</div>
    </p>

    <p>
      <label for="select_element2">Select Element 2:</label>
        <select name="select_element2" multiple="multiple">
          <optgroup label="Option Group 1">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </optgroup>
          <optgroup label="Option Group 2">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </optgroup>
        </select>
      <div class="clear">&nbsp;</div>
    </p>

    <p>
      <label for="radio_buttons">Radio Buttons:</label>
      <div>
        <input type="radio" name="radio_button" value="radio_1" /> Radio 1<br/>
        <input type="radio" name="radio_button" value="radio_2" /> Radio 2<br/>
        <input type="radio" name="radio_button" value="radio_3" /> Radio 3
      </div>
      <div class="clear">&nbsp;</div>
    </p>

    <p>
      <label for="checkboxes">Checkboxes:</label>
      <div>
        <input type="checkbox" name="checkboxes" value="check_1" /> Radio 1<br/>
        <input type="checkbox" name="checkboxes" value="check_2" /> Radio 2<br/>
        <input type="checkbox" name="checkboxes" value="check_3" /> Radio 3
      </div>
      <div class="clear">&nbsp;</div>
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" />
    </p>

    <p>
      <label for="file">File Input:</label>
      <input type="file" name="file" />
    </p>

    <p><button type="reset">clear</button> <button type="submit">send</button></p>

  </form>

</fieldset>

<small><a href="#wrapper">[top]</a></small>
<hr />

<a name="tables"></a><h1>Tabelas | Tablas | Tables</h1>

<table>
  <caption>Table Caption</caption>

  <thead>
    <tr>
      <th>Table Header 1</th>
      <th>Table Header 2</th>
      <th>Table Header 3</th>
    </tr>
  </thead>

  <tfoot>
    <tr>
      <th>2.000,00</th>
      <th>2.000,00</th>
      <th>2.000,00</th>
    </tr>
  </tfoot>

  <tbody>
    <tr>
      <td>Division 1</td>
      <td>Division 2</td>
      <td>Division 3</td>
    </tr>
    <tr class="even">
      <td>Division 1</td>
      <td>Division 2</td>
      <td>Division 3</td>
    </tr>
    <tr>
      <td>Division 1</td>
      <td>Division 2</td>
      <td>Division 3</td>
    </tr>
  </tbody>

</table>

<small><a href="#wrapper">[top]</a></small>
<hr />

<a name="misc"></a><h1>Miscelânea | Varios | Misc Stuff<br/>abbr, acronym, pre, code, sub, sup, etc.</h1>

<p>Lorem <em><strong>50m<sup>2</sup></strong></em> dolor <em><strong>H<sub>2</sub>O</strong></em> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p>

<pre>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
Nullam dignissim convallis est. Quisque aliquam. Donec faucibus.
Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi,
imperdiet at, tincidunt nec, gravida vehicula, nisl.
Praesent mattis, massa quis luctus fermentum,
turpis mi volutpat justo, eu volutpat enim
diam eget metus. Maecenas ornare tortor.
</pre>
<br />
<code>
&lt;?php
$years = range(1900,date('Y'));
foreach ($years as $year) {
  echo "$year&lt;br/&gt;"
}
?&gt;
</code>
<br />

<blockquote>
  "This stylesheet is going to help so freaking much." <br />-Blockquote
</blockquote>

<small><a href="#wrapper">[top]</a></small>

<!-- End of Sample Content -->
