def gen_vo (classes, m):
	TAB = "   "
	
	if m == "s":
		f = open("classes.php", "w")
		
	for classe in classes:
		if (m == "m"):
			f = open(classe+".php", "w")
		f.write("<?php\n\n")
		f.write("class "+ classe + " implements JsonSerializable { \n")
		
		# Escreve os atributos
		for atributo in classes[classe]:
			atributo = atributo.replace('&', "")
			f.write(TAB)
			f.write ("private $" + atributo + ";\n")

		# Escreve o construtor
		f.write("\n" + TAB + "public function __construct(")
		for i, atributo in enumerate(classes[classe]):
			atributo = atributo.replace('&', "")
			f.write ("$" + atributo)
			if i < len(classes[classe])-1:
				f.write(", ")
		f.write(") {\n")

		# Escrever $this->attr = $attr
		for i, atributo in enumerate(classes[classe]):
			atributo = atributo.replace('&', "")
			f.write (TAB + TAB + "$this->" + atributo + " = " + "$" + atributo + ";\n")

		f.write(TAB + "}\n") # Fim construtor

		# Escrever Getters e Setters
		for i, atributo in enumerate(classes[classe]):
			atributo = atributo.replace('&', "")
			# Getter
			f.write (TAB + "public function get" + atributo.capitalize() + " " + "(){\n")	
			f.write(TAB + TAB)
			f.write("return $this->"+atributo+";\n")
			f.write(TAB + "}\n\n")

			# Setter
			f.write (TAB + "public function set" + atributo.capitalize() + " " + "("+ "$" + atributo +"){\n")
			f.write(TAB + TAB)
			f.write("$this->" + atributo + " = " + "$" + atributo + ";\n")
			f.write(TAB + "}\n\n")		

		f.write("}\n\n\n")
		f.write("?>\n\n")
		if m == "m":
			f.close()
