import * as React from "react";
import {
  Button,
  View,
  Image,
  ScrollView,
  Text,
  TextInput,
  Dimensions,
} from "react-native";
import { createDrawerNavigator } from "@react-navigation/drawer";
import { NavigationContainer } from "@react-navigation/native";
import Icon from "react-native-vector-icons/Ionicons";

function HomeScreen({ navigation }) {
  const width = Dimensions.get("window").width;
  return (
    <View
      style={{
        flex: 1,
        alignItems: "center",
        justifyContent: "center",
        backgroundColor: "white",
      }}
    >
      <ScrollView>
        <Text style={{ fontSize: 15, fontWeight: "bold", fontStyle: "normal", textAlign: 'center', paddingBottom: 20 }}>
          Find your favourite foods
        </Text>
        <View
          style={{
            flexDirection: "row",
            justifyContent: "center",
            alignItems: "center",
            backgroundColor: "#e0e0e0",
            borderRadius: 20,
            width: width - 50,
          }}
        >
          <TextInput
            placeholder="Search"
            onChangeText={(searchString) => {}}
            underlineColorAndroid="transparent"
            style={{
              flex: 1,
              paddingTop: 10,
              paddingRight: 20,
              paddingBottom: 10,
              paddingLeft: 20,
              color: "white",
            }}
          />
          <Icon
            style={{ padding: 10 }}
            name="ios-search"
            size={20}
            color="#000"
          />
        </View>
      </ScrollView>
    </View>
  );
}

function NotificationsScreen({ navigation }) {
  return (
    <View
      style={{
        flex: 1,
        alignItems: "center",
        justifyContent: "center",
        backgroundColor: "white",
      }}
    >
      <Button onPress={() => navigation.goBack()} title="Go back home" />
    </View>
  );
}

const Drawer = createDrawerNavigator();

export default function HomeAppScreen() {
  return (
    <NavigationContainer>
      <Drawer.Navigator
        initialRouteName="Home"
        screenOptions={{
          headerStyle: {
            elevation: 0,
            shadowOpacity: 0,
            backgroundColor: "white",
          },
        }}
      >
        <Drawer.Screen
          options={{
            title: "History",
            headerTitle: "",
            headerTitleAlign: "center",
            headerRight: () => (
              // <Icon.Button
              //   name="ios-cart"
              //   size={25}
              //   backgroundColor="#ffffff"
              //   color="#000000"
              //   onPress={() => {}}
              // />
              <Image
                source={require("./../assets/images/avatar.jpeg")}
                style={{
                  width: 45,
                  height: 45,
                  borderRadius: 150 / 2,
                  overflow: "hidden",
                  borderWidth: 3,
                  margin: 5,
                  borderColor: "grey",
                }}
              />
            ),
          }}
          name="Home"
          component={HomeScreen}
        />
        <Drawer.Screen name="Notifications" component={NotificationsScreen} />
      </Drawer.Navigator>
    </NavigationContainer>
  );
}
