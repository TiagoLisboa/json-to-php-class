import os

def gen_vo (classes, m, folder):
	if folder != "" and not os.path.exists(folder):
		os.makedirs(folder)
		folder  = folder + "/"

	TAB = "   "
	
	if m == "s":
		f = open(folder + "classes.php", "w")
		
	for classe in classes:
		if (m == "m"):
			f = open(folder  + classe+".php", "w")
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
			if i == 0 and atributo[0] == "&":
				temp_attr = atributo
				classes[classe].pop(i)
				classes[classe].append(temp_attr)
				f.write ("$" + classes[classe][i] + ", ")
			else:
				if atributo[0] == "&":
					atributo = atributo.replace('&', "")
					f.write ("$" + atributo + " = 0")
				else:
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

		# Escrever jsonSerialize()	
		f.write (TAB + "public function jsonSerialize(){\n")
		f.write(TAB + TAB)
		f.write("return [\n")
		for i, atributo in enumerate(classes[classe]):
			atributo = atributo.replace("&", "")
			f.write(TAB + TAB + TAB)
			f.write("\"" + atributo + "\" => $this->" + atributo)
			if i < len(classes[classe])-1:
				f.write(",\n")
			else:
				f.write("\n")
		f.write (TAB + TAB + "];\n")
		f.write (TAB + "}\n")

		f.write("}\n\n\n")
		f.write("?>\n\n")
		if m == "m":
			f.close()
