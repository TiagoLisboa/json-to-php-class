import os


def gen_dao(classes, m, folder):
	TAB = "   "

	if folder != "":
		folder  = folder + "/"
		# os.makedirs(folder)

	if m == "s":
		f = open(folder + "classesDAO.php", "w")
		f.write("<?php\n")

	for classe in classes:
		if m == "m":
			f = open(folder + classe+"DAO'.php", "w")
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


##########################################################################

		attr = classes[classe]

		f.write(TAB) # Inicio do delete
		for a in attr:
			if a[0] == "&":
				a = a.replace("&", "")
				f.write("public static function delete ($" + a + ") { \n")
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

##########################################################################

		f.write(TAB) # Inicio do getAll
		f.write("public static function getAll () { \n")

		attr = classes[classe]

		f.write(TAB + TAB)
		f.write("$con = Conexao::connect();\n\n")

		# Cria o comando sql
		f.write(TAB + TAB)
		f.write("$sql = \"SELECT * FROM " + classe.lower() + "\";\n")

		f.write(TAB + TAB)
		f.write("$resultado = mysqli_query($con, $sql);\n")

		f.write(TAB + TAB)
		f.write("if(!$resultado) {echo mysqli_error ($con);} \n")
		f.write(TAB + TAB)
		f.write("else {\n")
		f.write(TAB + TAB + TAB)
		f.write("$array = array();\n")
		f.write(TAB + TAB + TAB)
		f.write("while ($i = mysqli_fetch_array($resultado)) {\n")
		f.write(TAB + TAB + TAB + TAB)
		f.write("array_push($array, new " + classe + "(")

		for i,a in enumerate(attr):
			if (a[0] == "&"):
				a = a.replace("&", "")
			f.write("$i[\'" + a + "\']")
			if i < len(attr)-1:
				f.write(", ")
			else:
				f.write("));\n")
		f.write(TAB + TAB + TAB)
		f.write("}\n")
		f.write(TAB + TAB + TAB)
		f.write("return $array;\n")
		f.write(TAB + TAB)
		f.write("}\n\n")

		f.write(TAB + TAB)
		f.write("Conexao::close();\n")
		f.write(TAB)
		f.write("}\n\n") # Fim do getAll

##########################################################################

		f.write(TAB) # Inicio do delete

		attr = classes[classe]

		for a in attr:
			if a[0] == "&":
				a = a.replace("&", "")
				f.write("public static function getById ($"+ a +") { \n")

				f.write(TAB + TAB)
				f.write("$con = Conexao::connect();\n\n")

				# Cria o comando sql
				f.write(TAB + TAB)
				f.write("$sql = \"SELECT * FROM " + classe.lower() + " WHERE " + a + " = $" + a + "\";\n")

				f.write(TAB + TAB)
				f.write("$resultado = mysqli_query($con, $sql);\n")

				f.write(TAB + TAB)
				f.write("if(!$resultado) {echo mysqli_error ($con);} \n")
				f.write(TAB + TAB)
				f.write("else {\n")
				f.write(TAB + TAB + TAB)
				f.write("$i = mysqli_fetch_array($resultado)\n")
				f.write(TAB + TAB + TAB)
				f.write("$array = new " + classe + "(")

				for i,a in enumerate(attr):
					if (a[0] == "&"):
						a = a.replace("&", "")
					f.write("$i[\'" + a + "\']")
					if i < len(attr)-1:
						f.write(", ")
					else:
						f.write(");\n")
				f.write(TAB + TAB + TAB)
				f.write("return $array;\n")
				f.write(TAB + TAB)
				f.write("}\n\n")

				f.write(TAB + TAB)
				f.write("Conexao::close();\n")
				f.write(TAB)
				f.write("}\n\n") # Fim do getAll

##########################################################################
		
		f.write("}\n\n") # Fim da classe


		if m == "m":
			f.write("?>")
			f.close()


	if m == "s":
		f.write("?>")
		f.close()