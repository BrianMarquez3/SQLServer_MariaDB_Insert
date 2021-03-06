USE [estudiantes]
GO
/****** Object:  User [briandb]    Script Date: 21/03/2020 19:24:46 ******/
CREATE USER [briandb] FOR LOGIN [briandb] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  Table [dbo].[alumnos]    Script Date: 21/03/2020 19:24:46 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[alumnos](
	[usuario] [int] NOT NULL,
	[password] [varchar](25) NOT NULL,
	[email] [varchar](25) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[usuario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
INSERT [dbo].[alumnos] ([usuario], [password], [email]) VALUES (1, N'12345', N'brian3marquez@gmail.com')
INSERT [dbo].[alumnos] ([usuario], [password], [email]) VALUES (2, N'23', N'sdsd@fdsf.com')
