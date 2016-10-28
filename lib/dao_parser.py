def gen_dao(classes, m):
	TAB = "   "

	f = open("classesDAO.php", "w")
	f.write("<?php\n")

	for classe in classes:
		f.write("require_once \"" + classe + ".php\";\n")
		f.write("require_once \"Conexao.php\";\n")

		f.write("")

		# for attr in classes[classe]:
			# print(TAB + attr)


	f.write("?>")
