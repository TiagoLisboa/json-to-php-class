def gen_dao(classes, m):
	TAB = "   "

	if m == "s":
		f = open("classesDAO.php", "w")
		f.write("<?php\n")

	for classe in classes:
		if m == "m":
			f = open(classe+".php", "w")
			f.write("<?php\n")


		f.write("require_once \"" + classe + ".php\";\n")
		f.write("require_once \"Conexao.php\";\n")

		f.write("class " + classe + "DAO {\n")

		f.write(TAB) # Inicio do insert
		f.write("public static function insert (" + classe + " $" + classe.lower() + ") { \n")

		attr = classes[classe]
		# # Remove ID
		# if attr[len(attr)-1][0] == "&":
		# 	attr.pop(len(attr)-1)

		f.write(TAB + TAB)
		f.write("$con = Conexao::connect();\n\n")

		# Pega os atributos do objeto passado
		for a in attr:
			if a[0] != "&":
				f.write(TAB + TAB)
				f.write("$" + a + " = $" + classe.lower() + "->get" + a.capitalize() + "();\n")

		# Cria o comando sql
		f.write(TAB + TAB)
		f.write("$sql = \"INSERT INTO " + classe.lower() + " (")
		for i,a in enumerate(attr):
			if a[0] != "&":
				f.write(a)
				if i < len(attr)-1 and attr[i+1][0] != "&":
					f.write(", ")
		f.write(") VALUES (")
		for i,a in enumerate(attr):
			if a[0] != "&":
				f.write("\'$" + a + "\'")
				if i < len(attr)-1 and attr[i+1][0] != "&":
					f.write(", ")
		f.write(")\";\n\n")

		f.write(TAB + TAB)
		f.write("$resultado = mysqli_query($con, $sql);\n")

		f.write(TAB + TAB)
		f.write("if(!$resultado) {echo mysqli_error ($con);} \n\n")

		f.write(TAB + TAB)
		f.write("Conexao::close();\n")
		f.write(TAB)
		f.write("}\n\n") # Fim do insert

##########################################################################

		f.write(TAB) # Inicio do update
		f.write("public static function update (" + classe + " $" + classe.lower() + ") { \n")

		attr = classes[classe]

		f.write(TAB + TAB)
		f.write("$con = Conexao::connect();\n\n")

		# Pega os atributos do objeto passado
		for a in attr:
			f.write(TAB + TAB)
			a = a.replace("&", "")
			f.write("$" + a + " = $" + classe.lower() + "->get" + a.capitalize() + "();\n")

		# Cria o comando sql
		f.write(TAB + TAB)
		f.write("$sql = \"UPDATE " + classe.lower() + " SET ")
		for i,a in enumerate(attr):
			# a = a.replace("&", "")
			if (a[0] != "&"):
				f.write(a + " = \'$" + a + "\'")
				if i < len(attr)-1 and attr[i+1][0] != "&":
					f.write(", ")
			else:
				a = a.replace("&", "")
				f.write(" WHERE " + a + " = \'$" + a + '\'')
		f.write("\";\n\n")

		f.write(TAB + TAB)
		f.write("$resultado = mysqli_query($con, $sql);\n")

		f.write(TAB + TAB)
		f.write("if(!$resultado) {echo mysqli_error ($con);} \n\n")

		f.write(TAB + TAB)
		f.write("Conexao::close();\n")
		f.write(TAB)
		f.write("}\n\n") # Fim do update



		f.write("}\n\n") # Fim da classe


##########################################################################

		f.write(TAB) # Inicio do delete
		for a in attr:
			if a[0] == "&":
				a = a.replace("&", "")
				f.write("public static function delete ($" + a + ") { \n")

				attr = classes[classe]

				f.write(TAB + TAB)
				f.write("$con = Conexao::connect();\n\n")

				# Cria o comando sql
				f.write(TAB + TAB)
				f.write("$sql = \"DELETE FROM " + classe.lower() + " WHERE " + a + " = \'$" + a + "\'")
				f.write("\";\n\n")

				f.write(TAB + TAB)
				f.write("$resultado = mysqli_query($con, $sql);\n")

				f.write(TAB + TAB)
				f.write("if(!$resultado) {echo mysqli_error ($con);} \n\n")

				f.write(TAB + TAB)
				f.write("Conexao::close();\n")
				f.write(TAB)
				f.write("}\n\n") # Fim do delete



		f.write("}\n\n") # Fim da classe


		if m == "m":
			f.write("?>")
			f.close()


	if m == "s":
		f.write("?>")
		f.close()